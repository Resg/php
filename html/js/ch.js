function checkFrm(frm)
{

    if(frm.who.value.length==0)
 {
    alert("¬ведите им€")
    frm.who.focus();
    return false;
 }
 
   if(frm.email.value.length==0)
 {
    alert("¬ведите e-mail")
    frm.email.focus();
    return false;
 }
  var re =/([0-9a-zA-Z\.-_]+)@([0-9a-zA-Z\.-_]+)/;
  if(frm.email.value.length>0 && frm.email.value.match(re)==null)
  {
    alert("¬ведите корректный e-mail")
    frm.email.focus();
    return false;
  }
 
  if(frm.msg.value.length==0)
 {
    alert("¬ведите сообщение")
    frm.msg.focus();
    return false;
 }
 

  
return true;
}