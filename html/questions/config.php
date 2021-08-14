<?php
$STATS_CONF["dbname"]="salton";
$STATS_CONF["sqlhost"]="localhost";
$STATS_CONF["sqluser"]="root";
$STATS_CONF["sqlpassword"]="1133387";

$STATS_CONF["adminpassword"]="3acf37f64da43a80cffbf70452372047";
$STATS_CONF["sqlserver"]="MySql";

// E-Mail, used as login to administration console
$STATS_CONF["cnsoftwarelogin"]="stat@salton.ru";

// The name of your web-server
$COUNTER["servername"]="www.salton.ru";

// Storing up the statistics.
$COUNTER["savelog"]=30;

// Do not count jumps from network excludeip/excludemask
$COUNTER["excludeip"]="0.0.0.0";
$COUNTER["excludemask"]="255.255.255.255";

// Time difference between local and server time in seconds
$COUNTER["timeoffset"]=0;

// Time delay of starting midnight_calc procedure in seconds
$COUNTER["mnoffset"]=900;

// Turn off CNStats authorization
// yes - turn off
// no - do not turn off
$COUNTER["disablepassword"]="yes";

// Send errors reports to E-Mail (E-Mail is set
// in option $STATS_CONF["cnsoftwarelogin"]
$COUNTER["senderrorsbymail"]="no";

// Adjust tables and diagrammes to the necessary resolution.
// Values may be 800 or 1024
$COUNTER["resolution"]=800;
?>