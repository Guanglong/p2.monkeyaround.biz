
function getToken(){
    var cookies = document.cookie.split(";");
    var token='';
    for (var i=0; i<cookies.length; i++) {
       var cookieText = cookies[i].replace(/^\s\s*/, '').replace(/\s\s*$/, '');  // remove white spaces 
       if (cookieText.indexOf('token=') ==0){
           token = cookieText.replace('token=','');
           return token;
        }
    }
   return token;
}


function switchVisibility(){
  var email = document.getElementById('email').innerHTML.replace("Email: ",'');   
   switchVisibilityViaAjax(email);
}

 function switchVisibilityViaAjax(email){
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
   var parameters = "now="+now.getTime()+"&email="+email+"&token="+getToken();
   
   xmlhttp.open("POST","/users/switchVisibility/"+email+"?"+ parameters,true);
   xmlhttp.send();  
 } 

 
function handleOnCheckEmail(ajaxData){
   if (ajaxData.readyState==4 && ajaxData.status==200)    {    
    var privateInd = ajaxData.responseText.substr(0,1);       
    document.getElementById('privateInd').innerHTML = privateInd;
    if (privateInd=='Y')  document.getElementById('switchVisibilityResult').innerHTML  ="Your profile has been set to private, so no one can see your posts.";
    else document.getElementById('switchVisibilityResult').innerHTML  ="Your profile has been set to public, so the others can follow you, and view your posts";
  }
}

