<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>
            
			<h1><img src="/i/captions/h_comp.gif" alt="Условия Конкурса" /></h1>

            <p>Поделитесь с&nbsp;нами своей историей о&nbsp;том, как обувная косметика SALTON выручила вас, помогла в&nbsp;трудных ситуациях или просто сделала вашу жизнь комфортнее. Мы&nbsp;ждем ваши письма с&nbsp;рассказами по&nbsp;адресу salton@upeco.ru.</p>
            <p>
            <span class="red">Лучшие истории будут опубликованы на&nbsp;нашем сайте, а&nbsp;их&nbsp;авторы получат поощрительные подарки.</span></p>

			<br />
            <h2><img src="/i/captions/h2_prizes.gif" alt="Подарки" /></h2>
			<div class="break"></div>      
            <p class="attention">*Внешний вид подарков может отличаться от фотоизображений</p>
            <p>При желании вы&nbsp;можете прислать вашу фотографию, которая будет помещена рядом с&nbsp;вашим письмом.</p>

			<div class="oline" ></div>

			<h2><img src="/i/captions/h2_tellstory.gif" alt="Рассказать историю" /></h2>
            <? session_start();	?>
            <script src="validate.js" type="text/javascript"></script>
            <form action="email-thankyou.php#send" method="post" name="contactForm" onsubmit="return validateForm(this);">
            <div class="send">
                	<div><span>Ф.И.О.</span><input name="name" type="text" class="text" value="<?=$_POST['name']?>" /></div>
                    <div><span>Эл. почта</span><input name="email" type="text" class="text" value="<?=$_POST['email']?>" /></div>
                    <div><span>Возраст</span><input type="text" class="text" name="age" value="<?=$_POST['age']?>" /></div>
                    <div><span>Род занятий</span><input type="text" class="text" name="prof" value="<?=$_POST['prof']?>" /></div>
                    <div class="red">Ваше сообщение:</div>
                    <div><textarea cols="0" rows="0" name="message"><?=$_POST['message']?></textarea></div>
                    <div><span>Введите код:</span><input type="text" class="text" name="keystring"></div>
                    <div class="captcha_jquery"><span>&nbsp;</span><img src="scripts/captcha/index.php?<? echo session_name()?>=<? echo session_id()?>" /></div>
                    
                    <div><span>&nbsp;</span><input name="submit" type="submit" class="submit" value=""></div>

           </div>
           </form>
           

            
<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>