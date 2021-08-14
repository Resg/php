<?php
error_reporting(0);

$STATS_CONF["is_cookie"]=intval($HTTP_GET_VARS["c"]);
$STATS_CONF["graph"]=1;

if ($HTTP_GET_VARS["p"]!="undefined" && !empty($HTTP_GET_VARS["p"])) 
	$STATS_CONF["page"]=urldecode($HTTP_GET_VARS["p"]);
else $STATS_CONF["page"]=$HTTP_SERVER_VARS["HTTP_REFERER"];
$STATS_CONF["page"]=htmlspecialchars(urlencode($STATS_CONF["page"]));

if ($HTTP_GET_VARS["r"]!="undefined" && !empty($HTTP_GET_VARS["r"])) 
	$STATS_CONF["referer"]=$HTTP_GET_VARS["r"];

include "cnt.php";

Header("Content-type: image/gif");
$str=pack("CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC",0x47, 0x49, 0x46, 0x38, 0x39, 0x61, 0x01, 0x00, 0x01, 0x00, 0x80, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x21, 0xF9, 0x04, 0x01, 0x00, 0x00, 0x00, 0x00, 0x2C, 0x00, 0x00, 0x00, 0x00, 0x01, 0x00, 0x01, 0x00, 0x00, 0x02, 0x02, 0x44, 0x01, 0x00, 0x3B);
print $str;

?>