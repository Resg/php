<?php
$inpage=40;

$filter=$HTTP_GET_VARS["filter"];

$DATELINK="&amp;filter=".urlencode($filter);

if (!isset($type)) $r=cnstats_sql_query("SELECT d2,d3 FROM cns_data WHERE type=2 ORDER BY id;");
else  $r=cnstats_sql_query("SELECT d2,d3 FROM cns_data WHERE type=2 and d1='".mysql_escape_string($type)."' ORDER BY id;");

while ($a=mysql_fetch_assoc($r)) {
	$rr=mysql_escape_string(trim($a["d3"]));
	$rn=mysql_escape_string(trim($a["d2"]));

	$query=$query."IF(LOCATE('".$rr."',referer)!=0,'".$rn."',\n";
	$count_query++;
	}

$query=$query."'".$LANG["other links"]."'";
for ($i=0;$i<$count_query;$i++) $query=$query.")";

$fltsql=GenerateFilter($filter);
$r=cnstats_sql_query("SELECT ".$query.",count(referer)
          FROM cns_log
          WHERE type=1 AND date>'$startdate' AND date<'$enddate' AND referer LIKE 'http%' ".$fltsql."
          GROUP BY ".$query."
          ORDER BY 2 desc;");

while ($a=mysql_fetch_array($r,MYSQL_NUM)) {
	$TABLED[]=StripSlashes($a[0]);
	$TABLEC[]=$a[1];
	}

ShowTable(0);
?>
