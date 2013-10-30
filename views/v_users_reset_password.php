<pageInstruction>Password Reset</pageInstruction>
<br/>
<form method='POST' action='/users/p_reset_password'>
    <div>Email:    <input type='text' name='email'>   </div>
    <br/><br/>
    <div>Password:
    <input type='password' name='temp_password'>
    </div>

    <br/><br/>

    <?php if(isset($error)): ?>
        <div class='error'>
            Password could not reset, are you sure you have the right email address entered?
        </div>
        <br>
    <?php endif; ?>
    <?php if(isset($emailSent)): ?>
        <div class='error'>
            An confirmation email has been set to your email account, you need to get the email before you can continue to reset your password.
            Please ensure your email filter is not set to block emails from monkeyaroundblog@gmail.com. 
        </div>
        <br>
    <?php endif; ?>
    <div><button  >Reset</button></div>
</form>