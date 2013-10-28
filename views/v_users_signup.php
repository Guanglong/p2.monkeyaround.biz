<pageInstruction> to sign up with us, enter values and then submit.</pageInstruction>
 <br/>
<form class='main' method='POST'  action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
     <div class="error" id="firstNameValidation"> </div>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <div class="error" id="lastNameValidation"> </div>
    <br><br>

    Email<br>
    <input type='text' name='email' onchange='javascript:checkEmail();'>
    <div class="error" id="emailValidation"> </div>
    <br><br>

    Password<br>
    <input type='password' name='password' onKeyUp="javascript:displayStrength();">
     <div class="error" id="passwordValidation"> </div>
    <br><br>
    Password Strength:
    <div id='pwStrength' class='pwStrength'>  </div> <br>
     <br><br>
    <!--input type='submit' onclick="javascript:onSubmit();"value='Sign??up'-->
    <button onclick="return onSubmit();">Sign Up</button>
</form>
