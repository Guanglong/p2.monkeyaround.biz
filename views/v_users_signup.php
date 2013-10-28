<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email' onchange='javascript:checkEmail();'>
    <div class="error" id="emailValidation"> </div>
    <br><br>

    Password<br>
    <input type='password' name='password' onKeyUp="javascript:displayStrength();">
    
    <br><br>
    Password Strength:
    <div id='pwStrength' class='pwStrength'>  </div> <br>
     <br><br>
    <input type='submit' value='Sign up'>
</form>
