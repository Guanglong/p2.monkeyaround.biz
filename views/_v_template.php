<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

   <div id='menu'>

        <a href='/'>Home</a>
        <!--button onclick="javascript:window.location='/';"> Go Home</button-->
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <!--button onclick="javascript:window.location='/users/logout';" >Logout </button-->
           <a href='/users/logout'>Log out</a>
            <a href='/users/profile'>Profile</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up</a>
            <!--button onclick="javascript:window.location='/users/signup');">Sign up</button-->
            <a href='/users/login'>Log in</a>

        <?php endif; ?>

    </div>

    <br>

    <?php if(isset($content)) echo $content; ?>
</body>
</html>