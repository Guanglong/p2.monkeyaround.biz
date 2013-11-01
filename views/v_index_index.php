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
	  <li>signup page: Duplicate Email alert via AJAX </li>
	  <li>signup page: Passowrd strength reminder </li>  
	  <li>signup page: Generate Welcome email upon sign-up, email is sent by monkeyaroundblog@gmail.com.(Tested with gmail.com singup) </li>
	  <li>Profile page: Toogle visiblity of user and user's posts</li>
	  <li>Profile page: Login count</li>
	  <li>Login page:  Reset password, confirm the changes via email</li>
	</ul>

</div>

