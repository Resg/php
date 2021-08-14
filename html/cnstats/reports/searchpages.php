<?php
$inpage=40;

$by=$HTTP_GET_VARS["by"]=="hits"?"hits":"hosts";
$filter=$HTTP_GET_VARS["filter"];

$DATELINK="&amp;by=".$by."&amp;filter=".urlencode($filter);

$quer=$quer1="";
$cnt=0;
$PRE=$PRU=$PPP=Array();

$r=cnstats_sql_query("SELECT * FROM cns_data WHERE type=1 ORDER BY id");
while ($a=mysql_fetch_assoc($r)) {
	$url=trim($a["d1"]);
	$name=trim($a["d2"]);
	$regexp=trim($a["d3"]);
	$parent=trim($a["d4"]);

	$PRU[$url]=$parent;
	$PRE[$url]=$regexp;
	$PPP[$url]=trim($a["d5"]);

	if (!empty($url)) {
		$quer=$quer."(IF(LOCATE('$url',referer)!=0,referer,\n";
		$quer1=$quer1."(IF(LOCATE('$url',referer)!=0,'$name|||$regexp|||$url',\n";
		$cnt++;
		}
	}
$quer=$quer."'no'";
$quer1=$quer1."'no'";

for ($i=0;$i<$cnt;$i++) {
	$quer=$quer."))";
	$quer1=$quer1."))";
	}

if ($by=="hits") {
	$ADMENU.="<a href='index.php?st=".$st."&amp;stm=".$stm."&amp;ftm=".$ftm.RemoveVar("by",$DATELINK)."&amp;by=hosts'>".$LANG["by hosts"]."</a><br>";
	$ADMENU.=$LANG["by hits"];
	$howhh="";
	}
else {
	$ADMENU.=$LANG["by hosts"]."<br>";
	$ADMENU.="<a href='index.php?st=".$st."&amp;stm=".$stm."&amp;ftm=".$ftm.RemoveVar("by",$DATELINK)."&amp;by=hits'>".$LANG["by hits"]."</a>";
	$howhh=" type=1 AND ";
	}


$sqlflt=GenerateFilter($filter);

$r=cnstats_sql_query("SELECT ".$quer.",count(referer),".$quer1.",referer, page
          FROM cns_log
          WHERE ".$howhh." date>'".$startdate."' AND date<'".$enddate."' AND referer LIKE 'http%' ".$sqlflt."
          GROUP BY page,referer
          ORDER BY 2 desc;");

$PH=$NM=$CN=$LN=Array();
while ($a=mysql_fetch_array($r,MYSQL_NUM)) {
	list($ssystem,$regexp,$url)=explode("|||",$a[2]);
	$data=GetRegexpPhrase($regexp,$a[0],$url);
	if ($data!="" && $ssystem!="no") {
		if (isset($PH[$a[4]])) $CN[$a[4]]+=$a[1]; else $CN[$a[4]]=$a[1];
		$PH[$a[4]]=$data;
		$NM[$a[4]]=$ssystem;
		$LN[$a[4]]=$a[3];
		}
	}

arsort($CN);

$count=0;
while (list ($key, $val) = each ($CN)) {
	if ($count>=$start && $count<$start+$inpage) {
		$TABLED[]=$key;
		$TABLEC[]=$val;
		}
	$count++;
    }

if ($count!=0) {
	LeftRight($start,$inpage,$num,$count,0);
	print $TABLE;
	print "<tr class=tbl1><td align='center' width=75>&nbsp;<b>".$LANG["search system"]."</b></td><td align=center width=251><b>".$LANG["search phrases"]."</b></td><td align='center' width=45><b>".$LANG["count"]."</b></td></tr>";
	while (list ($key, $val) = each ($TABLED)) {
		if ($class!="tbl1") $class="tbl1"; else $class="tbl2";
		print ("\n<tr class=".$class.">\n<td>&nbsp;<a target='_blank' href='".$LN[$val]."'>".$NM[$val]."</a></td>\n<td><a href='".urldecode($val)."' target='_blank'>".urldecode($val)."</a><br>".phrase_uncode($PH[$val])."</td>\n<td align=right width='10%'>&nbsp;".$TABLEC[$key]."&nbsp;</td></tr>");
	    }
	print "\n</table>\n";
	LeftRight($start,$inpage,$num,$count);
	}
?>
