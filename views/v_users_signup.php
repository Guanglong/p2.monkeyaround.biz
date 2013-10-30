<pageInstruction> to sign up with us, enter values and then submit.</pageInstruction>
 <br/>
    <?php if(isset($error)): ?>
        <div class='error'>
            Error, a valid <?=$error ?> is required!
        </div>
        <br>
    <?php endif; ?>
<form class='main' method='POST'  action='/users/p_signup'>
    First Name<br>
    <input type='text' name='first_name'>
     <div class="error" id="firstNameValidation"> </div>
    <br>
    Last Name<br>
    <input type='text' name='last_name'>
    <div class="error" id="lastNameValidation"> </div>
    <br><br>

    Email<br>
    <input type='text' name='email' onchange='javascript:checkEmail();'>
    <div class="error" id="emailValidation"> </div>
    <br> 
   <div title="any alpha-numeric characters. to increase the strength, consider using special characters" >  Password*</div><br>
    <input type='password' name='password' onKeyUp="javascript:displayStrength();">
     <div class="error" id="passwordValidation"> </div>
    <br>
    Password Strength: 
    <table align="center">
         <tr> 
            <td >
              <div id='pwStrength' class='pwStrength' >  </div>   
            </td>
          </tr> 
     </table>
     <br/>
    <button onclick="return onSubmit();">Sign Up</button>
</form>
