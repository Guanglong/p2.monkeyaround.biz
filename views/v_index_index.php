<script type="text/javascript" >
    <!-- one time script to hide the home button, since it is on the home page already! -->
   document.getElementById("homeButton").style.display="none";
</script>
<section>Welcome to <?=APP_NAME?><?php if($user) echo '.'.$user->first_name."!"; ?></section>

<div id="mainContent"> In this monkeyland, you can: <br/><br/>
    post your notes (publicly or privately)<br/>
    follow others  <br> 
	<hr/>
	<p> +1 features:</p>
	<ul>
	  <li>Sign-Up: Duplicate Email alert via AJAX </li>
	  <li>Sign-Up page: Password strength reminder </li>  
	  <li>Sign-Up page: Generate Welcome email upon sign-up, email is sent by monkeyaroundblog@gmail.com  or monkey.dw15@gmail.</li>
	  <li>Profile page: Toggle visiblity of user and user's posts</li>
	  <li>Profile page: Login count</li>
	  <li>Login page:  Reset password, confirm the reset via email</li>
	</ul>

</div>