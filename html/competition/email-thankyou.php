<?
	session_start();
 	if (isset($_POST['submit'])) {
		if (isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring']) {
			 // Grab the form vars
			 $age =htmlspecialchars( (isset($_POST['age'])) ? $_POST['age'] : '' );
			 $prof =htmlspecialchars( (isset($_POST['prof'])) ? $_POST['prof'] : '' );
			 $email =htmlspecialchars( (isset($_POST['email'])) ? $_POST['email'] : '' );
			 $message =nl2br(htmlspecialchars( (isset($_POST['message'])) ? $_POST['message'] : '' ));
			 $name = htmlspecialchars((isset($_POST['name'])) ? $_POST['name'] : '' );

			 // Check for email injection
			 if (has_emailheaders($email)) {
			  die("Possible email injection occuring");
			 }

			 $headers= "MIME-Version: 1.0\r\n";
			 $headers.= "Content-Type: text/html; charset=windows-1251\r\n";
		     $headers.= "From: salton.ru <no-replay@salton.ru>\r\n"; 
		
		$subject= "=?koi8-r?B?".base64_encode(convert_cyr_string("���������� �������", "w","k"))."?=";
		
$mailBody=<<<del
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
���: <strong>$name</strong><br/>
Email: <strong><a href="mailto:$email">$email</a></strong><br/>
�������: <strong>$age</strong><br/>
��� �������: <strong>$prof</strong><br/><br/>
$message
</body>
</html>
del;

		$mailTo = 'salton@upeco.ru, mzhbanova@upeco.ru, ynasilnikova@upeco.ru';
		mail($mailTo,$subject, $mailBody, $headers); 
			 
			 
 		$message = '���� ��������� ����������'; ?>

<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>


  <h1><img src="/i/captions/h_comp.gif" alt="������� ��������" /></h1>
  <h2><?=$message?></h2>
  <br /><br /><br /><br />
  <a href="/competition/"><img src="/i/buttons/send_new.png" alt="�������� ����� ���������" /></a>


<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>

    	<? }

		 else {	?>
<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>

			<h1><img src="/i/captions/h_comp.gif" alt="������� ��������" /></h1>

            <p>���������� �&nbsp;���� ����� �������� �&nbsp;���, ��� ������� ��������� SALTON �������� ���, ������� �&nbsp;������� ��������� ��� ������ ������� ���� ����� ����������. ��&nbsp;���� ���� ������ �&nbsp;���������� ��&nbsp;������ salton@upeco.ru.</p>
            <p>
            <span class="red">������ ������� ����� ������������ ��&nbsp;����� �����, �&nbsp;��&nbsp;������ ������� ������������� �������.</span></p>

			<br />
            <h2><img src="/i/captions/h2_prizes.gif" alt="�������" /></h2>
			<div class="break"></div>
            <p class="attention">*������� ��� �������� ����� ���������� �� ���������������</p>
            <p>��� ������� ��&nbsp;������ �������� ���� ����������, ������� ����� �������� ����� �&nbsp;����� �������.</p>

			<div class="oline" ></div>

			<h2><a name="send"></a><img src="/i/captions/h2_tellstory.gif" alt="���������� �������" /></h2>
            <? session_start();	?>
            <script src="validate.js" type="text/javascript"></script>
            <form action="email-thankyou.php#send" method="post" name="contactForm" onsubmit="return validateForm(this);">
            <div class="send">
                	<div><span>�.�.�.</span><input name="name" type="text" class="text" value="<?=$_POST['name']?>" /></div>
                    <div><span>��. �����</span><input name="email" type="text" class="text" value="<?=$_POST['email']?>" /></div>
                    <div><span>�������</span><input type="text" class="text" name="age" value="<?=$_POST['age']?>" /></div>
                    <div><span>��� �������</span><input type="text" class="text" name="prof" value="<?=$_POST['prof']?>" /></div>
                    <div class="red">���� ���������:</div>
                    <div><textarea cols="0" rows="0" name="message"><?=$_POST['message']?></textarea></div>
                    <div><span>������� ���:</span><input type="text" class="text" name="keystring"></div>
                    <div class="captcha_jquery">
                    	<span>&nbsp;</span><img src="scripts/captcha/index.php?<? echo session_name()?>=<? echo session_id()?>" />
                        <p class="red">������� ������ ��� �������������.<br />����������, ��������� �������.</p>

                    </div>

                    <div><span>&nbsp;</span><input name="submit" type="submit" class="submit" value=""></div>

           </div>
           </form>



<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>

		<? }

	} else {
		$message = 'Please use the contact form for communication';
	}

function has_emailheaders($text) {
	return preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i", $text);
}
?>
