//<!--
// This function will validate a form
function validateForm(theform)
{
  pass = 1; //assume everything is ok
  msg = "Ошибка отправки сообщения:\n\n";
  //make sure required fields are not empty
 
 
  //make sure required fields are not empty
  if (isEmpty(theform.name.value))
  {
    msg = msg + "- Заполните поле ФИО\n";
    pass = 0;
  }
  
  //validate the email address
  if (!(isEmail(theform.email.value)))
  {
    msg = msg + "- Пожалуйста введите корректный email\n";
    pass = 0;
  }
  
  if (isEmpty(theform.city.value))
  {
    msg = msg + "- Заполните поле Город\n";
    pass = 0;
  }

  
   if (isEmpty(theform.message.value))
  {
    msg = msg + "- Введите сообщение\n";
    pass = 0;
  }
  
   if (isEmpty(theform.keystring.value))
  {
    msg = msg + "- Введите код\n";
    pass = 0;
  }

  
  
  
  if (theform.usertype.value == 2)
  {
	  if (isEmpty(theform.orgname.value))
	  {
		msg = msg + "- Заполните поле Название организации\n";
		pass = 0;
	  }
	  
	  if (isEmpty(theform.phone.value))
	  {
		msg = msg + "- Заполните поле Телефон\n";
		pass = 0;
	  }
   
  }
  
  

  if (pass == 1)
  {
    return true;
  }
  else
  {
    alert(msg);
    return false;
  }
}

// validators ------------------------------------------------------------------
	
function isEmpty (s) {
	var p = /\S+/;
	return !p.test(s);
}

function isEmail(string) {
    if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
        return true;
    else
        return false;
}

function isAlphaNum(string) {
    if (string.search(/^[A-Za-z0-9]+$/) != -1)
        return true;
    else
        return false;
}

function isNum(string) {
    if (string.search(/^[0-9]+$/) != -1)
        return false;
    else
        return true;
}

function isExecutable (s) {
	var p = /\.(bat|com|dll|exe|vbs)$/i;
	return p.test(s);
}

function isImage (s) {
	var p = /\.(gif|jpg)$/i;
	return p.test(s);
}

function isUrl (s) {
	var p = /^(http|https|ftp):\/\/\S+\.[^\.\s]{2,4}(\/\S*)?$/i;
	return p.test(s);
}

//-->