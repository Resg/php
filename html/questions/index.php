<?	include($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>
            
			<h1 class="hfix"><img src="/i/captions/h_question.gif" width="326" height="36" alt="" /></h1>
			
            <p>��&nbsp;������ ������ ������������ ��� ������ �&nbsp;����� SALTON �&nbsp;���������� ����� �������, �������� ����������� ������ ��&nbsp;������ salton@upeco.ru</p>



			<img src="/i/captions/h2_sendmail.gif" alt="�������� ������" />
            
			
			<? ?>
            <script src="validate.js" type="text/javascript"></script>
            <form action="email-thankyou.php#send" method="post" name="contactForm" onsubmit="return validateForm(this);">
            <div class="send">

                	<div><span>�.�.�.</span><input name="name" type="text" class="text" value="<?=$_POST['name']?>" /></div>
                    <div><span>��. �����</span><input name="email" type="text" class="text" value="<?=$_POST['email']?>" /></div>
					<div><span>�����</span><input name="city" type="text" class="text" value="<?=$_POST['city']?>" /></div>
					<div><span></span>
						<select name="usertype" id="usertype">
							<option value="1" selected="selected">���������� ����</option>
							<option value="2">����������� ����</option>
						</select>
					</div>
					<div class="usertype-2"><span>��������/��� �����������</span><input name="orgname" type="text" class="text" value="<?=$_POST['orgname']?>" /></div>
				

					<div class="usertype-2"><span>�������</span><input name="phone" type="text" class="text" value="<?=$_POST['phone']?>" /></div>
					

                    <div class="red">���� ���������:</div>
                    <div><textarea cols="0" rows="0" name="message"><?=$_POST['message']?></textarea></div>
                    <div><span>������� ���:</span><input type="text" class="text" name="keystring" /></div>
                    <div class="captcha_jquery"><span>&nbsp;</span><img src="scripts/captcha/index.php?<? echo session_name()?>=<? echo session_id()?>" />
                    </div>
                    
                    <div><span>&nbsp;</span><input name="submit" type="submit" class="submit" value="" /></div>

           </div>
           </form>
		   
		   <? ?>
		   
            

<?	include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>