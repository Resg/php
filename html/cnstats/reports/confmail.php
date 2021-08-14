<?php
$filter=$HTTP_GET_VARS["filter"];

if ($HTTP_GET_VARS["action"]=="save") {

	$email=str_replace("'","`",StripSlashes($HTTP_GET_VARS["email"]));
	$subject=str_replace("'","`",StripSlashes($HTTP_GET_VARS["subject"]));
	if ($HTTP_GET_VARS["daily"]=="daily") {
		$day=0;
		}
	else $day=intval($HTTP_GET_VARS["day"]);
	$what=0;
	if ($HTTP_GET_VARS["what1"]=="on") $what+=1;
	if ($HTTP_GET_VARS["what2"]=="on") $what+=2;
	if ($HTTP_GET_VARS["what3"]=="on") $what+=4;
	
	cnstats_sql_query("UPDATE cns_config SET mail_day='".$day."', mail_email='".$email."', mail_subject='".$subject."', mail_content=".$what);
	header("Location: index.php?st=".$st."&stm=".$stm."&ftm=".$ftm."&filter=".urlencode($filter));
	exit;
	}

$r=cnstats_sql_query("SELECT mail_day, mail_email, mail_subject, mail_content FROM cns_config");
$a=mysql_fetch_array($r);
?>
<form class="m0" method="get" action="index.php" name="frm1">
<?php=$TABLE;?>
<tr class=tbl0><td colspan=2 align=center><b><?php=$LANG["period"];?></b></td></tr>
<tr class=tbl1><td colspan=2><input <?php if ($a["mail_day"]==0) print "checked"; ?> type=radio name=period value='daily' onClick='document.forms["frm1"].elements["day"].disabled=true;'><?php=$LANG["everyday"];?></td></tr>
<tr class=tbl2><td colspan=2><input <?php if ($a["mail_day"]!=0) print "checked"; ?> type=radio name=period value='weekly' onClick='document.forms["frm1"].elements["day"].disabled=false;'><?php=$LANG["onceperweek"];?></td></tr>
<tr class=tbl1><td nowrap><?php=$LANG["whatday"];?></td><td width='100%'>
<select name=day style='width:100%;' <?php if ($a["mail_day"]==0) print "disabled"; ?>>
<option value=1 <?php if ($a["mail_day"]==1) print "selected"; ?>><?php=$LANG["d1"];?>
<option value=2 <?php if ($a["mail_day"]==2) print "selected"; ?>><?php=$LANG["d2"];?>
<option value=3 <?php if ($a["mail_day"]==3) print "selected"; ?>><?php=$LANG["d3"];?>
<option value=4 <?php if ($a["mail_day"]==4) print "selected"; ?>><?php=$LANG["d4"];?>
<option value=5 <?php if ($a["mail_day"]==5) print "selected"; ?>><?php=$LANG["d5"];?>
<option value=6 <?php if ($a["mail_day"]==6) print "selected"; ?>><?php=$LANG["d6"];?>
<option value=7 <?php if ($a["mail_day"]==7) print "selected"; ?>><?php=$LANG["d7"];?>
</select>
</td></tr>

<tr class=tbl0><td colspan=2 align=center><b><?php=$LANG["mailandmail"];?></b></td></tr>
<tr class=tbl2><td>E-Mail</td><td><input value='<?php=htmlspecialchars($a["mail_email"]);?>' type=text name=email style='width:100%;'></td></tr>
<tr class=tbl1><td><?php=$LANG["subject"];?></td><td><input value='<?php=htmlspecialchars($a["mail_subject"]);?>' type=text name=subject style='width:100%;'></td></tr>

<tr class=tbl0><td colspan=2 align=center><b><?php=$LANG["inreport"];?></b></td></tr>
<tr class=tbl2><td colspan=2><input <?php if (($a["mail_content"]&1)!=0) print "checked"; ?> type=checkbox name=what1><?php=$LANG["hitshostssessions"];?></td></tr>
<tr class=tbl1><td colspan=2><input <?php if (($a["mail_content"]&2)!=0) print "checked"; ?> type=checkbox name=what2><?php=$LANG["topreferers"];?><br><small><?php=$LANG["slow"];?></small></td></tr>
<tr class=tbl2><td colspan=2><input <?php if (($a["mail_content"]&4)!=0) print "checked"; ?> type=checkbox name=what3><?php=$LANG["toppages"];?><br><small><?php=$LANG["slow"];?></small></td></tr>
<tr class=tbl1><td colspan=2 align=center><input type=submit value='<?php=$LANG["save"];?>'></td></tr>
</table>
<input type=hidden name='action' value='save'>
<input type=hidden name='st' value='confmail'>
<input type=hidden name='stm' value='<?php=$stm;?>'>
<input type=hidden name='ftm' value='<?php=$ftm;?>'>
<input type=hidden name='filter' value='<?php=$filter;?>'>
<input type=hidden name='nowrap' value='1'>
</form>
<?php
$NOFILTER=1;
?>