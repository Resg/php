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

			<h2><img src="/i/captions/h2_tellstory.gif" alt="���������� �������" /></h2>
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
                    <div class="captcha_jquery"><span>&nbsp;</span><img src="scripts/captcha/index.php?<? echo session_name()?>=<? echo session_id()?>" /></div>
                    
                    <div><span>&nbsp;</span><input name="submit" type="submit" class="submit" value=""></div>

           </div>
           </form>
           

            
<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>