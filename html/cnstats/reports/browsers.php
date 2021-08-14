<?php
$by=intval($HTTP_GET_VARS["by"]);
$filter=$HTTP_GET_VARS["filter"];

$DATELINK="&amp;by=".$by."&amp;filter=".urlencode($filter);

if ($by==1) {
	$ADMENU.="<a href=\"index.php?st=browsers&amp;stm=".$stm."&amp;ftm=".$ftm.RemoveVar("by",$DATELINK)."&amp;by=0\">".$LANG["with versions"]."</a><br>";
	$ADMENU.=$LANG["without versions"];
	$type=6;
	}
else {
	$ADMENU.=$LANG["with versions"]."<br>";
	$ADMENU.="<a href=\"index.php?st=browsers&amp;stm=".$stm."&amp;ftm=".$ftm.RemoveVar("by",$DATELINK)."&amp;by=1\">".$LANG["without versions"]."</a>";
	$type=5;
	}

$query="";
$count_query=0;
$r=cnstats_sql_query("SELECT d1,d2 FROM cns_data WHERE type=".$type." ORDER BY id;");
while ($a=mysql_fetch_assoc($r)) {
	$rr=mysql_escape_string(trim($a["d2"]));
	$rn=mysql_escape_string(trim($a["d1"]));
	$query=$query."IF(LOCATE('".$rr."',agent)!=0,'".$rn."',";
	$count_query++;
	}
$query=$query."'".$LANG["other browsers"]."'";
for ($i=0;$i<$count_query;$i++) $query=$query.")";

$sqlflt=GenerateFilter($filter);
$r=cnstats_sql_query("SELECT ".$query.",count(*)
          FROM cns_log
          WHERE date>'".$startdate."' AND date<'".$enddate."' ".$sqlflt."
          GROUP BY ".$query."
          ORDER BY 2 desc;");

while ($a=mysql_fetch_array($r,MYSQL_NUM)) {
	$TABLED[]=$a[0];
	$TABLEC[]=$a[1];
	}

ShowTable(0);

$DATELINK="&amp;by=".$by;
?>
<br>