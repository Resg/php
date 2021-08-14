<?php
$action=$HTTP_GET_VARS["action"];
$filter=$HTTP_GET_VARS["filter"];

if ($action==1) {
	$lang=$HTTP_GET_VARS["lang"];
	$lang=str_replace(";","_",$lang);$lang=str_replace(",","_",$lang);$lang=str_replace(".","_",$lang);
	$lang=cnstats_mhtml($lang);

	$gauge=$HTTP_GET_VARS["gauge"]=="on"?1:0;
	$percents=$HTTP_GET_VARS["percents"]=="on"?1:0;
	$hints=$HTTP_GET_VARS["hints"]=="on"?1:0;
	$antialias=$HTTP_GET_VARS["antialias"]=="on"?1:0;
	$diagram=intval($HTTP_GET_VARS["diagram"]);
	$date_format=cnstats_mhtml($HTTP_GET_VARS["date_format"]);
	$shortdate_format=cnstats_mhtml($HTTP_GET_VARS["shortdate_format"]);
	$shortdm_format=cnstats_mhtml($HTTP_GET_VARS["shortdm_format"]);
	$datetime_format=cnstats_mhtml($HTTP_GET_VARS["datetime_format"]);
	$datetimes_format=cnstats_mhtml($HTTP_GET_VARS["datetimes_format"]);

	cnstats_sql_query("UPDATE cns_config SET diagram='".$diagram.
                                         "', antialias='".$antialias.
                                         "', language='".$lang.
                                         "', gauge='".$gauge.
                                         "', hints='".$hints.
                                         "', percents='".$percents.
                                         "', date_format='".$date_format.
                                         "', shortdate_format='".$shortdate_format.
                                         "', shortdm_format='".$shortdm_format.
                                         "', datetime_format='".$datetime_format.
                                         "', datetimes_format='".$datetimes_format.
                                         "';");
	header("Location: index.php?st=config&stm=".$stm."&ftm=".$ftm."&filter=".$filter);
	exit;
	}

function YesNo($name,$value,$disabled="",$def="") {
	if (!empty($disabled)) $value=$def;

	print "<SELECT name=\"".$name."\" ".$disabled.">\n";
	print "<OPTION value=\"on\"".($value==1?" selected":"").">Yes\n";
	print "<OPTION value=\"off\"".($value==0?" selected":"").">No\n";
	print "</SELECT>\n";
	}

$r=cnstats_sql_query("SELECT * FROM cns_config;");
$a=mysql_fetch_array($r);

if (empty($a["date_format"])) $a["date_format"]=$LANG["date_format"];
if (empty($a["shortdate_format"])) $a["shortdate_format"]=$LANG["shortdate_format"];
if (empty($a["shortdm_format"])) $a["shortdm_format"]=$LANG["shortdm_format"];
if (empty($a["datetime_format"])) $a["datetime_format"]=$LANG["datetime_format"];
if (empty($a["datetimes_format"])) $a["datetimes_format"]=$LANG["datetimes_format"];

if ($a["timeoffset"]==1) $a["timeoffset"]=date("Z")/3600;
?>
<form action='index.php' method='get'>
<?php=$TABLE;?>
<tr class="tbl0"><td width="100%"></td><td width="170"></td></tr>
<tr class="tbl0"><td colspan="2" align="center"><b><?php=$LANG["configmain"];?></b></td></tr>

<tr class="tbl2"><td width="100%"><?php=$LANG["show diagrams"];?></td><td width="1%"><?php=YesNo("gauge",$a["gauge"]);?></td></tr>
<tr class="tbl2"><td><?php=$LANG["show percents"];?></td><td><?php=YesNo("percents",$a["percents"]);?></td></tr>

</table><br><?php=$TABLE;?>
<tr class="tbl0"><td width="100%"></td><td width="170"></td></tr>
<tr class="tbl0"><td colspan="2" align="center"><b><?php=$LANG["configgraph"];?></b></td></tr>

<tr class="tbl2"><td><?php=$LANG["default diagrams"];?></td><td>

<table>
<tr><td><input <?php=(gdVersion()==0?"disabled":"");?> type="radio" name="diagram" value="1" <?php=($a["diagram"]==1?"checked":"");?>></td><td><img src="img/graph_1_c.gif" vspace="2" width="130" height="75"></td></tr>
<tr><td><input <?php=(gdVersion()==0?"disabled":"");?> type="radio" name="diagram" value="2" <?php=($a["diagram"]==2?"checked":"");?>></td><td><img src="img/graph_2_c.gif" vspace="2" width="130" height="75"></td></tr>
<tr><td><input <?php=(gdVersion()==0?"disabled":"");?> type="radio" name="diagram" value="3" <?php=($a["diagram"]==3?"checked":"");?>></td><td><img src="img/graph_3_c.gif" vspace="2" width="130" height="75"></td></tr>
</table>

<tr class="tbl2"><td><?php=$LANG["antialias"];?></td><td><?php=YesNo("antialias",$a["antialias"],gdVersion()<2?"disabled":"","no");?></td></tr>

</table><br><?php=$TABLE;?>
<tr class="tbl0"><td width="100%"></td><td width="170"></td></tr>
<tr class="tbl0"><td colspan="2" align="center"><b><?php=$LANG["configdate"];?></b></td></tr>

<tr class="tbl2"><td><?php=$LANG["text_date_format"];?></td><td><input type="text" name="date_format" value="<?php=$a["date_format"];?>" style="width:160px"></td></tr>
<tr class="tbl2"><td><?php=$LANG["text_shortdate_format"];?></td><td><input type="text" name="shortdate_format" value="<?php=$a["shortdate_format"];?>" style="width:160px"></td></tr>
<tr class="tbl2"><td><?php=$LANG["text_shortdm_format"];?></td><td><input type="text" name="shortdm_format" value="<?php=$a["shortdm_format"];?>" style="width:160px"></td></tr>
<tr class="tbl2"><td><?php=$LANG["text_datetime_format"];?></td><td><input type="text" name="datetime_format" value="<?php=$a["datetime_format"];?>" style="width:160px"></td></tr>
<tr class="tbl2"><td><?php=$LANG["text_datetimes_format"];?></td><td><input type="text" name="datetimes_format" value="<?php=$a["datetimes_format"];?>" style="width:160px"></td></tr>
<tr class="tbl2"><td><?php=$LANG["language"];?></td><td><SELECT name="lang" style="width:160px">
<?php
$lng=$a["language"];

$d=dir("lang/");
while ($entry=$d->read()) {
	if (substr($entry,0,4)=="lang") {
		$lang=substr($entry,5,-4);
		if ($lang!=$lng) print "<OPTION>".$lang."\n";
		else print "<OPTION SELECTED>".$lang."\n";
		}
	}
?>
</SELECT></td></tr>
<tr class="tbl1"><td colspan="2" align="center"><input type="submit" value="<?php=$LANG["save"];?>"></td></tr>
</table>
<input type="hidden" name="action" value="1">
<input type="hidden" name="st" value="config">
<input type="hidden" name="nowrap" value="1">
<input type="hidden" name="hints" value="off">
<?php
print "<input type='hidden' name='stm' value='".$stm."'>\n";
print "<input type='hidden' name='ftm' value='".$ftm."'>\n";
print "<input type='hidden' name='filter' value='".urlencode($filter)."'>\n";
?>
</form>

<?php
$NOFILTER=1;
?>