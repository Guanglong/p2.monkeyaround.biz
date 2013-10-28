<h1>This is the profile of <?=$user->first_name."<br/>"; ?></h1>
<?php if($user) echo 'Last Name: '.$user->last_name."<br/>"; ?>
<?php if($user) echo 'Email: '.$user->email."<br/>";?>
<?php if($user) echo 'First Name: '.$user->first_name."<br/>"; ?>
<?php if($user) echo 'Last Login: '.Time::display($user->last_login)."<br/>"; ?>
<?php if($user) echo 'as a loyal Member Since: '.Time::display($user->created)."<br/>"; ?>