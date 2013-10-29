<pageInstruction>use your email to Log in</pageInstruction>
<form method='POST' action='/users/p_login'>
    <div>Email:    <input type='text' name='email'>   </div>
    <br><br>

    <div>Password:
    <input type='password' name='password'>
    </div>

    <br><br>

    <?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>
    <div><button  >Log in </button></div>
</form>