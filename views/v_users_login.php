<section>use your email to Log in</section>
<br/>

<?php if(isset($reset_password)): ?>
    <div class='error'>
        Your password has been reset!
    </div>
    <br>
<?php endif; ?>
    
<form method='POST' action='/users/p_login'>
    <div>Email:    <input type='text' name='email' required=''>   </div>
    <br/><br/>

    <div>Password:
    <input type='password' name='password' required=''>
    </div>
    <br/><br/>
    <div> forgot your password? No problem, click <a href="/users/reset_password" >here </a> to reset it! </div>
    <br/><br/>

    <?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>
    <div><button >Submit</button></div>
</form>