<?php

print $TABLE; ?>

<tr class=tbl1><td align=center><b>PHP include</b></td></tr>
<tr class=tbl2><td>
&lt;?<br>
<?php
if ($HTTP_SERVER_VARS["DOCUMENT_ROOT"][strlen($HTTP_SERVER_VARS["DOCUMENT_ROOT"])-1]!="/") $HTTP_SERVER_VARS["DOCUMENT_ROOT"].="/";

print "include &quot;".$HTTP_SERVER_VARS["DOCUMENT_ROOT"]."cnstats/cnt.php&quot;;<br>\n";
?>
?&gt;
</td></tr>
</table>
<br>
<?php
print $TABLE; ?>

<tr class=tbl1><td align=center><b>SSI include</b></td></tr>
<tr class=tbl2><td>
&lt;!--#include virtual="/cnstats/cnt.php" --&gt;<br>
</td></tr>
</table>
<br>
<?php
	print $TABLE;
	if (!empty($HTTP_SERVER_VARS["HTTP_HOST"])) $HTTP_SERVER_VARS["HTTP_HOST"]="http://".$HTTP_SERVER_VARS["HTTP_HOST"];
?>
<tr class=tbl1><td align=center><b>GIF 1x1</b></td></tr>
<tr class=tbl2><td>
&lt;script language="javascript"&gt;<br>
cnsd=document;cnsd.cookie="b=b";cnsc=cnsd.cookie?1:0;<br>
document.write('&lt;img src="<?php=$HTTP_SERVER_VARS["HTTP_HOST"];?>/cnstats/cntg.php?c='+cnsc+'&r='+escape(cnsd.referrer)+'&p='+escape(cnsd.location)+'" width="1" height="1" border="0"&gt;');<br>
&lt;/script&gt;&lt;noscript&gt;&lt;img src="<?php=$HTTP_SERVER_VARS["HTTP_HOST"];?>/cnstats/cntg.php?468&c=0" width="1" height="1" border="0"&gt;&lt;/noscript&gt;<br>
</td></tr>
</table>
<?php

$NOFILTER=1;
?>
