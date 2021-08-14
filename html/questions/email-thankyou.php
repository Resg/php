<?
	session_start();

 	if (isset($_POST['submit'])) {
		if (isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring']) {
			 // Grab the form vars
			 $email = htmlspecialchars((isset($_POST['email'])) ? $_POST['email'] : '' );
			 $message =nl2br(htmlspecialchars((isset($_POST['message'])) ? $_POST['message'] : '' ));
			 $name = htmlspecialchars((isset($_POST['name'])) ? $_POST['name'] : '' );
			 $city = htmlspecialchars((isset($_POST['city'])) ? $_POST['city'] : '' );
			 $orgname = htmlspecialchars((isset($_POST['orgname'])) ? $_POST['orgname'] : '' );
			 $phone = htmlspecialchars((isset($_POST['phone'])) ? $_POST['phone'] : '' );

			 // Check for email injection
			 if (has_emailheaders($email)) {
			  die("Possible email injection occuring");
			 }
			 
			 $urlico = '';
			 if ($orgname) {
			 	$urlico = 'Название организации: <strong>'.$orgname.'</strong><br/>';
				$urlico .= 'Телефон: <strong>'.$phone.'</strong><br/>';
			 }

             $headers= "MIME-Version: 1.0\r\n";
			 $headers.= "Content-Type: text/html; charset=windows-1251\r\n";
		     $headers.= "From: salton.ru <no-replay@salton.ru>\r\n"; 
		
		$subject= "=?koi8-r?B?".base64_encode(convert_cyr_string("SALTON: Задай свой вопрос", "w","k"))."?=";
		
$mailBody=<<<del
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
ФИО: <strong>$name</strong><br/>
Email: <strong><a href="mailto:$email">$email</a></strong><br/>
Город: <strong>$city</strong><br/>
$urlico
<br/>
$message
</body>
</html>
del;

		$mailTo = 'salton@upeco.ru, mzhbanova@upeco.ru, ynasilnikova@upeco.ru';
		mail($mailTo,$subject, $mailBody, $headers); 			 
			 
 		    $message = 'Ваше сообщение отправлено'; ?>

<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>


  <h1 class="hfix"><img src="/i/captions/h_question.gif" alt="Задай свой вопрос" /></h1>

  <h2><?=$message?></h2>
  <br /><br /><br /><br />
  <a href="/questions/"><img src="/i/buttons/send_new.png" alt="Написать новое сообщение" /></a>


<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>

    	<? }

		 else {	?>
<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>

			<h1 class="hfix"><img src="/i/captions/h_question.gif" width="326" height="36" alt="" /></h1>

            <p>Вы&nbsp;можете задать интересующий вас вопрос о&nbsp;марке SALTON и&nbsp;поделиться своим мнением, отправив электронное письмо по&nbsp;адресу salton@upeco.ru</p>

			<img src="/i/captions/h2_sendmail.gif" alt="Написать письмо" />

            <? session_start();	?>
            <script src="validate.js" type="text/javascript"></script>
            <form action="email-thankyou.php#send" method="post" name="contactForm" onsubmit="return validateForm(this);">
            <div class="send">

                	<div><span>Ф.И.О.</span><input name="name" type="text" class="text" value="<?=$_POST['name']?>" /></div>
                    <div><span>Эл. почта</span><input name="email" type="text" class="text" value="<?=$_POST['email']?>" /></div>
					<div><span>Город</span><input name="city" type="text" class="text" value="<?=$_POST['city']?>" /></div>
					<div><span></span>
						<select name="usertype" id="usertype">
							<option value="1" selected="selected">Физическое лицо</option>
							<option value="2">Юридическое лицо</option>
						</select>
					</div>
					<div class="usertype-2"><span>Название организации</span><input name="orgname" type="text" class="text" value="<?=$_POST['orgname']?>" /></div>
					<br />

					<div class="usertype-2"><span>Телефон</span><input name="phone" type="text" class="text" value="<?=$_POST['phone']?>" /></div>
					

                    <div class="red">Ваше сообщение:</div>
                    <div><textarea cols="0" rows="0" name="message"><?=$_POST['message']?></textarea></div>
                    <div><span>Введите код:</span><input type="text" class="text" name="keystring"></div>
                    <div class="captcha_jquery"><span>&nbsp;</span><img src="scripts/captcha/index.php?<? echo session_name()?>=<? echo session_id()?>" />
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
