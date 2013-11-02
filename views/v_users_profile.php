<section> This is your profile, <?=$user->first_name."!<br/>"; ?> To change the visibility of your posts, Click 'Switch Visibility' button </section>
<br/>
<div>Last Name:<?php if($user) echo $user->last_name; ?></div><br/>
<div id='email'>Email: <?php if($user) echo $user->email; ?></div><br/>
<div>First Name: <?php if($user) echo $user->first_name; ?></div><br/>
<div>Last Login: <?php if($user) echo Time::display($user->last_login); ?></div><br/>
<div>Total Login Count:<?php if($user) echo $user->login_count; ?></div><br/>
<div>A loyal Member Since: <?php if($user) echo Time::display($user->created); ?></div><br/>
<div title='when account is privat, no one can view the posts'>Is Account Private*: 
<span id='privateInd'><?php if($user)    echo $user->deleted_ind;  ?> </span></div><br/>
<div>
	<?php 
	   if($user) {
          echo "&nbsp;&nbsp;<button onClick='javascript:switchVisibility();' id='switchVisibility'>Switch Visibility </button>"; 
       }   
    ?>
</div>
<div class='error' id='switchVisibilityResult'><div>
