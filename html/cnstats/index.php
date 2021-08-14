<?
error_reporting(0);
$LANG=Array();

if (@is_file("install.php") || !is_file("config.php")) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Статистика</TITLE>
</HEAD>
<BODY>

<HR size=1>
<P>Для установки системы на ваш сервер вам необходимо выполнить следующие действия: </P>
<OL>
<LI>Выполнить скрипт "<B>install.php</B>". Это можно сделать перейдя по <a href=install.php>этой</a> ссылке. </LI>
<LI>Удалить файл "<b>install.php</b>" !!! </LI>
</OL>
</BODY>
</HTML>
<?
print $LANG["copyright"];
exit;
}

include "_funct.php";

session_start();
session_register("DATA");


mysqlconnect();

$err=0;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if (md5($_POST["password"])!=$STATS_CONF["adminpassword"]) $err=1;
        if ($_POST["login"]!=$STATS_CONF["cnsoftwarelogin"]) $err=2;

        if ($err==0) {
                $hash=md5(microtime().$_POST["login"].$_POST["password"]);
                $r=cnstats_sql_query("DELETE FROM cns_adminsessions WHERE last<NOW()-INTERVAL 1 MONTH;");
                cnstats_sql_query("INSERT INTO cns_adminsessions SET hash='".$hash."', last=NOW(), ip='".mysql_escape_string($_SERVER["REMOTE_ADDR"]." ".$_SERVER["HTTP_X_FORWARDED_FOR"])."';");
                if ($_POST["store"]=="on")
                        setcookie("CNSSESSION",$hash,time()+86400*30);
                else
                        setcookie("CNSSESSION",$hash);
                header("Location: ./index.php");
                exit;
        }
}

$authed=false;

if (strlen($_COOKIE["CNSSESSION"])==32) {
        $r=cnstats_sql_query("UPDATE cns_adminsessions SET last=NOW(), c=c+1 WHERE hash='".mysql_escape_string($_COOKIE["CNSSESSION"])."';");
        if (mysql_affected_rows()==1) $authed=true;
        }

$CONFIG=mysql_fetch_array(cnstats_sql_query("SELECT * FROM cns_config"));
include "lang/lang_".$CONFIG["language"].".php";

if ($COUNTER["disablepassword"]!="yes") {

if (!$authed) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE><?=$LANG["softname"];?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=<?=$LANG["charset"];?>">
<STYLE type="text/css">
<!--
body,td {font-size:11px;font-family:tahoma,sans-serif}
//-->
</STYLE>
</HEAD>
<BODY>
<table style='width:100%;height:100%'><tr><td>
<form class='m0' action='index.php' method='post' name="web">
<table border='0' cellspacing='1' cellpadding='4' bgcolor='silver' align='center' width='250'>
<tr bgcolor='gray'><td align="center">
<font face="Tahoma" color="#FFFFFF"><B>Авторизация доступа</B></font></td>
</tr>
<tr><td bgcolor='#FEFEFE' align='center' colspan='2'>
<div style="font-size: 6px">&nbsp;</div>
<table>
<tr><td><?=$LANG["login"];?>: </td><td><input type='text' name='login'>
<? if ($err==2) print "<br><font color=red>".$LANG["incorrect login"]."</font>";?>
</td></tr>
<tr><td><?=$LANG["password"];?>: </td><td><input type='password' name='password'>
<? if ($err==1) print "<br><font color=red>".$LANG["incorrect password"]."</font>";?>
</td></tr>
<tr><td colspan=2>

<input type="checkbox" name="store"> <?=$LANG["store password"];?>

</td></tr>
</table>

</td></tr>
<tr><td bgcolor='#FEFEFE' colspan='2' align='center'><input type='submit' value='<?=$LANG["submit"];?>' style='font-family:verdana,sans-serif;font-size:11px'></td></tr>
</table>
<input type='hidden' name='action' value='enter'>
</form>
</td></tr><tr><td valign="bottom" align="center">
<font face="Tahoma" color="#B6D7D7"><B><?=$LANG['softname'];?></B></font>
</td></tr></table>
<script><!--
//document.forms["web"].elements[0].focus() // --></script>
</BODY>
</HTML>
<?
exit;
}
}

if (empty($CONFIG["date_format"])) $CONFIG["date_format"]=$LANG["date_format"];
if (empty($CONFIG["shortdate_format"])) $CONFIG["shortdate_format"]=$LANG["shortdate_format"];
if (empty($CONFIG["shortdm_format"])) $CONFIG["shortdm_format"]=$LANG["shortdm_format"];
if (empty($CONFIG["datetime_format"])) $CONFIG["datetime_format"]=$LANG["datetime_format"];
if (empty($CONFIG["datetimes_format"])) $CONFIG["datetimes_format"]=$LANG["datetimes_format"];


$MENU_GROUPS=Array(
0=>$LANG["pages"],
1=>$LANG["referers"],
2=>$LANG["geography"],
3=>$LANG["system"],
4=>$LANG["other"],
5=>$LANG["config"]
);

$MENU=Array(
0,"attendance" ,$LANG["attendance"],
0,"pages"      ,$LANG["most popular pages"],
0,"input"      ,$LANG["input pages"],
0,"output"     ,$LANG["output pages"],
0,"domains"    ,$LANG["domain names"],
0,"parts"      ,$LANG["firts level"],
0,"pathes"     ,$LANG["pathes"],
0,"depth"      ,$LANG["depth"],


1,"referers"   ,$LANG["refer pages"],
1,"servers"    ,$LANG["refer sites"],
1,"who_s"      ,$LANG["search systems"],
1,"who_c"      ,$LANG["catalogs"],
1,"who_r"      ,$LANG["ratings"],
1,"who"        ,$LANG["popular sites"],
1,"who_history",$LANG["who_history"],
1,"phrases"    ,$LANG["search phrases"],
1,"links"      ,$LANG["search links"],
1,"searchpages",$LANG["found pages"],
1,"goodies"    ,$LANG["partners"],

2,"ip"         ,$LANG["ip adresses"],
2,"subnets"    ,$LANG["nets"],
2,"lang1"      ,$LANG["languages"],
2,"cities"     ,$LANG["cities"],
2,"countries"  ,$LANG["countries"],

3,"system"     ,$LANG["user-agents"],
3,"lang"       ,$LANG["accept-languages"],
3,"browsers"   ,$LANG["browsers"],
3,"robots"     ,$LANG["robots"],
3,"os"         ,$LANG["operating systems"],

4,"now"        ,$LANG["on-line"],
4,"log"        ,$LANG["log"],


5,"filters"    ,$LANG["filters"],
5,"getcode"    ,$LANG["getcode"],
5,"confmail"   ,$LANG["confmail"],
5,"config"     ,$LANG["config"],
5,"dbsize"     ,$LANG["dbsize"],
5,"logout&amp;nowrap=1"     ,$LANG["logout"],

);

$start=intval($_GET["start"]);

$st=$_GET["st"];
if (empty($st)) $st="attendance";
if (!file_exists("reports/".$st.".php")) $st="attendance";

if (isset($_GET["sd"])) {
$stm=strtotime($_GET["sd"]);
$ftm=strtotime($_GET["fd"]);
}
else {
$stm=intval($_GET["stm"]);
$ftm=intval($_GET["ftm"]);
if ($stm==0) {

$stm=mktime(0,0,0,date("m"),date("d"),date("Y"))+$COUNTER["timeoffset"];
$ftm=mktime(23,59,59,date("m"),date("d"),date("Y"))+$COUNTER["timeoffset"];

}
}

$startdate=date("Y-m-d H:i:s",intval($stm));
$enddate=date("Y-m-d H:i:s",intval($ftm));

$DATELINK="";
if ($_GET["nowrap"]==1 || $_POST["nowrap"]==1) {
include "reports/".$st.".php";
exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE><?=$LANG["softname"];?></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=<?=$LANG["charset"];?>">
<link rel="stylesheet" href="styles.css" type="text/css">
<SCRIPT language="JavaScript" TYPE="text/javascript">
<!--
function Calendar(el) {
wnd=window.open('calendar.php?el='+el,'calendar_'+el,'width=120,height=210,top='+(screen.height/2-105)+', left='+(screen.width/2-60)+', scrollbars=no,resizable=no,status=no,toolbar=no,menubar=no');
}
//-->
</SCRIPT>

</HEAD>
<BODY bgcolor="white" background="img/<?=$BBG;?>" class='m0'>

<table cellspacing=0 cellpadding=0 border=0 width=770><tr><td valign='top' width=170><img alt='' src=img/none.gif width=170 height=1><br>
<?
// MENU
if (isset($_GET["filter"])) $flt="&amp;filter=".urlencode($_GET["filter"]);

for ($i=0;$i<count($MENU_GROUPS);$i++) {
title($MENU_GROUPS[$i]);
print "<table cellspacing=5 cellpadding=0 border=0><tr><td>\n";
for ($j=0;$j<count($MENU);$j+=3) {
if ($MENU[$j]==$i) {
if ($st==$MENU[$j+1])
print "".$MENU[$j+2]."<br>\n";
else
print "<a href='index.php?st=".$MENU[$j+1]."&amp;stm=".$stm."&amp;ftm=".$ftm.$flt."'>".$MENU[$j+2]."</a><br>\n";
}
}
print "</td></tr></table>\n";
}

//title("Software");
print "<table cellspacing=5 cellpadding=0 border=0><tr><td>";
print $LANG["copyright"];
print "</td></tr></table>";

print "</td><td valign=top width=477 align=center>";
print "<table cellspacing=5 width=100% cellpadding=0 border=0><tr><td valign=top>";

$rmn=false;
if ($_GET["dateoff"]!=1 &&
    $st!="attendance" &&
    $st!="filters" &&
    $st!="dbsize" &&
    $st!="config" &&
    $st!="confmail" &&
    $st!="getcode" &&
    $st!="datafiles" &&
    $st!="who_history") $rmn=true;

if ($rmn) {
print $TABLE."<tr class=tbl2><td>";
if (isset($LANG["reports"][$st])) print $LANG["reports"][$st];
else for ($j=0;$j<count($MENU);$j+=3) if ($st==$MENU[$j+1]) print $MENU[$j+2]."</font>\n";
if (!empty($_GET["filter"])) print "<br><font style='color:gray;font-size:10px;'>".$LANG["filter"].": ".$_GET["filter"];
print "<br><font style='color:gray;font-size:10px;'>".$LANG["report for period from"]." ".date($CONFIG["datetime_format"],strtotime($startdate))." ".$LANG["till"]." ".date($CONFIG["datetime_format"],strtotime($enddate));
print "</font></td></tr></table>";
print "<img alt='' src=img/none.gif width=1 height=3><br>";
}

$ADMENU="";$NOFILTER=0;
$diftime_start = getmicrotime();
echo $st;
include "reports/".$st.".php";
$diftime_end = getmicrotime();
$diftime = $diftime_end - $diftime_start;

if ($NOFILTER==0) FormFilter($filter);

$r=cnstats_sql_query("SELECT hits,hosts,t_hits,t_hosts,t_users,users FROM cns_counter;");
for ($i=0;$i<mysql_num_rows($r);$i++) {
        $hits=mysql_result($r,$i,0);
        $hosts=mysql_result($r,$i,1);
        $users=mysql_result($r,$i,5);
        $t_hits=mysql_result($r,$i,2);
        $t_hosts=mysql_result($r,$i,3);
        $t_users=mysql_result($r,$i,4);
}

mysql_close();
print "</td></tr></table>\n";

print "</td><td width=125 valign=top align=center>\n";

if ($st=="attendance") {
title($LANG["today"]);
print "<table cellspacing=5 cellpadding=0 border=0 width='100%'><tr><td>\n";
print $LANG["visitors"];
print ":</td><td align=right>\n";
print "".cNumber($users)."</td></tr><tr><td>\n";
print $LANG["hosts"];
print ":</td><td align=right>\n";
print "".cNumber($hosts)."</td></tr><tr><td>\n";
print $LANG["hits"];
print ":</td><td align=right>\n";
print "".cNumber($hits)."</td></tr></table>\n";

title($LANG["total"]);
print "<table cellspacing=5 cellpadding=0 border=0 width='100%'><tr><td>\n";
print $LANG["visitors"];
print ":</td><td align=right>\n";
print "".cNumber($t_users)."</td></tr><tr><td>\n";
print $LANG["hosts"];
print ":</td><td align=right>\n";
print "".cNumber($t_hosts)."</td></tr><tr><td>\n";
print $LANG["hits"];
print ":</td><td align=right>\n";
print "".cNumber($t_hits)."</td></tr></table>\n";

}

if (!empty($ADMENU)) {
title($LANG["right additional"]);
print $ADMENU;
}

if ($rmn) {
$co=time()+$COUNTER["timeoffset"];

title($LANG["right bydates"]);
print "<form class='m0' action='index.php' method='get'><table cellspacing=0 cellpadding=0 border=0>\n";
print "<tr><td colspan=2>".$LANG["right startdate"].":</td></tr>\n";
print "<tr><td><input type=text value='".substr($startdate,0,-3)."' name=sd style='font-size:9px;width:100px;' id=sd></td><td><a href='javascript:Calendar(\"sd\");'><img src='img/calendar.gif' alt='Выбрать дату' width=16 height=16 border=0></a></td></tr>\n";
print "<tr><td colspan=2>".$LANG["right enddate"].":</td></tr>\n";
print "<tr><td><input type=text value='".substr($enddate,0,-3)."' name=fd style='font-size:9px;width:100px;' id=fd></td><td><a href='javascript:Calendar(\"fd\");'><img src='img/calendar.gif' alt='Выбрать дату' width=16 height=16 border=0></a></td></tr>\n";
print "<tr><td align=center colspan=2><img alt='' src=img/none.gif width=1 height=3><br><input type=submit value='".$LANG["right show"]."' style='font-size:9px;'></td></tr>\n";
print "</table>\n";
print "<input type=\"hidden\" name=\"st\" value='".$st."'>\n";

$fields=explode("&amp;",$DATELINK);
while (list ($key, $val) = each ($fields)) {
list ($vkey,$vval)=explode("=",$val);
if (!empty($vkey)) print "<input type=\"hidden\" name=\"".$vkey."\" value='".cnstats_mhtml(urldecode($vval))."'>\n";
}

print "</form>\n";
print "<img alt='' src=img/none.gif width=1 height=3><br>\n";

title($LANG["right bydays"]);
print "<table cellspacing=5 cellpadding=0 border=0 width='100%'><tr><td>\n";

print "<a href='index.php?st=".$st."&amp;stm=".(time()-300+$COUNTER["timeoffset"])."&amp;ftm=".(time()+$COUNTER["timeoffset"]).$DATELINK."'>".$LANG["last 5minutes"]."</a><br>\n";
print "<a href='index.php?st=".$st."&amp;stm=".(time()-3600+$COUNTER["timeoffset"])."&amp;ftm=".(time()+$COUNTER["timeoffset"]).$DATELINK."'>".$LANG["last hour"]."</a><br>\n";
print "<a href='index.php?st=".$st."&amp;stm=".(time()-86400+$COUNTER["timeoffset"])."&amp;ftm=".(time()+$COUNTER["timeoffset"]).$DATELINK."'>".$LANG["last day"]."</a><br>\n";
print "<img alt='' src=img/none.gif width=1 height=3><br>";
print "<a href='index.php?st=".$st."&amp;stm=".(mktime(0,0,0,date("m",$co),date("d",$co),date("Y",$co)))."&amp;ftm=".(mktime(23,59,59,date("m",$co),date("d",$co),date("Y",$co))).$DATELINK."'>".$LANG["today"]."</a><br>\n";
print "<a href='index.php?st=".$st."&amp;stm=".(mktime(0,0,0,date("m",$co),date("d",$co)-1,date("Y",$co)))."&amp;ftm=".(mktime(23,59,59,date("m",$co),date("d",$co)-1,date("Y",$co))).$DATELINK."'>".$LANG["yesterday"]."</a><br>\n";
print "<a href='index.php?st=".$st."&amp;stm=".(mktime(0,0,0,date("m",$co),date("d",$co)-7,date("Y",$co)))."&amp;ftm=".(mktime(23,59,59,date("m",$co),date("d",$co),date("Y",$co))).$DATELINK."'>".$LANG["7 days"]."</a><br>\n";
print "<a href='index.php?st=".$st."&amp;stm=".(mktime(0,0,0,date("m",$co),date("d",$co)-30,date("Y",$co)))."&amp;ftm=".(mktime(23,59,59,date("m",$co),date("d",$co),date("Y",$co))).$DATELINK."'>".$LANG["30 days"]."</a><br>\n";
print "</td></tr></table>\n";
}

if ($st!="getcode" && $st!="manual" && $st!="confmail" && $st!="config" && $st!="ipinfo"  && $st!="who_history") {
title($LANG["manual"]);
print "<table cellspacing=5 cellpadding=0 border=0 width='100%'><tr><td>\n";
print "<a href=\"index.php?st=manual&amp;stm=".$stm."&amp;ftm=".$ftm."\">".$LANG["manual"]."</a><br>\n";
print "<a href=\"index.php?st=manual&amp;stm=".$stm."&amp;ftm=".$ftm."#".$st."\">".$LANG["report description"]."</a><br>\n";
print "<img alt='' src=img/none.gif width=1 height=3><br>";
print "</td></tr></table>\n";
}

title($LANG["right time"]);
print "<table cellspacing=5 cellpadding=0 border=0 width='100%'><tr><td align='center'>\n";
printf ($LANG["report was generated"].":<br>%f ".$LANG["sec"]."<br>".$LANG["current time"].":<br>".date($CONFIG["datetime_format"],time()+$COUNTER["timeoffset"]),$diftime);
print "</td></tr></table>\n";

print "<img alt='' src=img/none.gif width=125 height=1><br>\n";

print "</td></tr></table>\n</BODY>\n</HTML>\n";
?>
