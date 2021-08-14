<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Sample Email Form: </title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="validate.js" type="text/javascript"></script>
</head>
<body>
 
 <div id="emailform">
  <form action="email-thankyou.php" method="post" name="contactForm" onsubmit="return validateForm(this);">
   <p><strong>Name:</strong> <input name="name" type="text" size="40" /></p>
   <p><strong>Email:</strong> <input name="email" type="text" size="40" /></p>
   <p><strong>Message:</strong></p>
   <p><textarea name="message" rows="4" cols="50"></textarea></p>
   <p><strong>Word Verification:</strong><br />
	<div><img src="scripts/captcha/index.php?<?php echo session_name()?>=<?php echo session_id()?>" style="vertical-align:middle" /> <input type="text" name="keystring"></p>
    <br /><br />
     
   <div id="buttons"><input name="submit" type="submit" value="Send Email">&nbsp;&nbsp;<input type="reset" value="Reset"></div>
  </form>
 </div>
    
</body></html>