<section> to sign up with us, enter values and then submit.</section>
 <br/>
    <?php if(isset($error) &&  strlen($error) >0): ?>
        <div class='error'>
            Error, please check your <?=$error ?> !
        </div>
        <br>
    <?php endif; ?>
<form id='signupForm' class='main' method='POST' action ='/users/p_signup' >
   First Name<br>
   <input type='text' maxlength="50" name='first_name' required=''>
   <div class="error" id="firstNameValidation"> </div>
   <br>
   Last Name<br>
   <input type='text' maxlength="50" name='last_name' required=''>
   <div class="error" id="lastNameValidation"> </div>
   <br><br>

   Email<br>
   <input type='text' maxlength="50" name='email' required='' onchange='javascript:checkEmail();'>
   <div class="error" id="emailValidation"> </div>
   <br> 
   <div title="any alpha-numeric characters. to increase the strength, consider using special characters" >  Password*</div><br>
   <input type='password' maxlength="50"  name='password' required='' onKeyUp="javascript:displayStrength();">
   <div class="error" id="passwordValidation"> </div>
   <br>
   <div id="pwStrength">Password Strength:</div> 
      
   <br/>
   <div><button onclick='javascript:return onSubmit(); '>Add</button></div> 
</form>