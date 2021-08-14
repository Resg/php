<?php
$filter=$HTTP_GET_VARS["filter"];

$DATELINK="&amp;filter=".urlencode($filter);

$query="";
$count_query=0;
$r=cnstats_sql_query("SELECT d1,d2 FROM cns_data WHERE type=4 ORDER BY id;");
while ($a=mysql_fetch_assoc($r)) {
	$query=$query."IF(LOCATE('".mysql_escape_string(trim($a["d2"]))."',agent)!=0,'".mysql_escape_string(trim($a["d1"]))."',\n";
	$count_query++;
	}
$query=$query."'".$LANG["other systems"]."'";
for ($i=0;$i<$count_query;$i++) $query=$query.")";

$sqlflt=GenerateFilter($filter);
$r=cnstats_sql_query("SELECT ".$query.",count(*)
          FROM cns_log
          WHERE type=1 AND date>'".$startdate."' AND date<'".$enddate."' ".$sqlflt."
          GROUP BY ".$query."
          ORDER BY 2 desc;");

$count=mysql_num_rows($r);

while ($a=mysql_fetch_array($r,MYSQL_NUM)) {
	$TABLED[]=$a[0];
	$TABLEC[]=$a[1];
	}

ShowTable(0);
?>
<br>