function checkEmail(email){
   var email = document.getElementsByName("email")[0].value;
   
    if (email.length >0 ) {      
       if (!validEmailFormat(email)){ document.getElementById('emailValidation').innerHTML="Invalid Email Address"; }
       else {checkEmailViaAjax(email); }
   }
}


function validEmailFormat(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

// the strength is made of:
//  
// upper alpha    0 --3
// lower alpha  0 --3
//numeric 0 --3
//special   0--3
// not part of the email/first name/lastname/email 0-3
// max strength is 15

function displayStrength(){
   // max strength is 18
 
   var currentStrength = Number( calculateStrength());
   var pwPercent = Math.round(100*currentStrength/15);  
   document.getElementById('pwStrength').style.width = Number(currentStrength*20)+"px";
  if ( currentStrength ==0) {
     document.getElementById('pwStrength').innerHTML = "";
   }
  else if ( currentStrength <6) {
     document.getElementById('pwStrength').innerHTML = "weak";
   }
   else if (currentStrength <12) {
      document.getElementById('pwStrength').innerHTML = "strong";
  }else {
    document.getElementById('pwStrength').innerHTML = "very strong";
   }
}


function calculateStrength(){

   var passWord = document.getElementsByName("password")[0].value;
   var totalStrength =0;
   if (passWord.length>0){

      // check for digits
     var digits = passWord.match(/\d/gi);
     if (digits !=null) {
        var digitLength = digits.length;
        if  (digitLength >3) { totalStrength +=3; } 
        else { totalStrength +=digitLength; } 
       }

      // check for lower case
     var az = passWord.match(/[a-z]/gi);
     if (az !=null) {
        var azLength = az.length;
        if  (azLength >3) { totalStrength +=3; } 
        else { totalStrength +=azLength; } 
       }

      // check for upper case
     var azUpper = passWord.match(/[A-Z]/gi);
     if (azUpper !=null) {
        var azUpperLength = azUpper.length;
        if  (azUpperLength >3) { totalStrength +=3; } 
        else { totalStrength +=azUpperLength; } 
       }


      // check for special chars
     var special = passWord.match(/[~!@#$%^&*()]/gi);
     if (special !=null) {
        var specialLength = special.length;
        if  (specialLength >3) { totalStrength +=3; } 
        else { totalStrength +=specialLength; } 
       }

   
       var firstName = document.getElementsByName("first_name")[0].value;   
       // password does not contains first name sequentially
       if (firstName.length>0 && passWord.indexOf(firstName) ==-1&&firstName.indexOf(passWord)==-1){
          totalStrength +=1;
       } 
 
      var lastName = document.getElementsByName("last_name")[0].value;    
       // password does not contains lastname sequentially
      if (lastName.length>0 && passWord.indexOf(lastName) ==-1 &&lastName.indexOf(passWord) ==-1){
          totalStrength +=1;
       } 

      var email = document.getElementsByName("email")[0].value;
       // password does not contains email sequentially
      if (email.length>0 && passWord.indexOf(email) ==-1 &&email.indexOf(passWord) ==-1){
          totalStrength +=1;
       } 

   }

     return totalStrength;
}


function checkEmailViaAjax(email){
    var d=new Date();
 
    if (window.XMLHttpRequest)  {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();  
    }
   else  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }

   xmlhttp.onreadystatechange=function()  {  
     handleOnCheckEmail(xmlhttp);  
  } 

   var  now=new Date();
   var parameters = "now="+now.getTime()+"&email="+email
 
   xmlhttp.open("POST","/users/checkEmail/"+email+"?"+ parameters,true);
   xmlhttp.send();  
 } 

 
function handleOnCheckEmail(ajaxData){
  if (ajaxData.readyState==4 && ajaxData.status==200)    {    
    var emailCount = ajaxData.responseText.substr(0,1);    
    if (Number(emailCount) !=0) {
        document.getElementsByName('email')[0].innerHTML ="";
        document.getElementById('emailValidation').innerHTML="Email is already used by Monkey Blog";
     }
     else {
       document.getElementById('emailValidation').innerHTML="";
     }   
  }
}







