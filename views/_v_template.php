<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
   <header> Monkey Blog </header> <br/>
   <div id='menu'>
        <!--a href='/'>Home</a-->
        <button id="homeButton" onclick="javascript:window.location='/';"> Home</button>
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <button onclick="javascript:window.location='/users/logout';" >Logout </button>
           <!--a href='/users/logout'>Log out</a-->
           
           <button onclick="javascript:window.location='/users/profile';" >Profile </button>
            <!--a href='/users/profile'>Profile</a-->
            
            <button onclick="javascript:window.location='/posts/follow';" >Follow Users</button> 
            
            <button onclick="javascript:window.location='/posts/add';" >Add Post </button> 
            
            <button onclick="javascript:window.location='/posts/';" >View Posts </button> 
            
           <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <!--a href='/users/signup'>Sign up</a-->
            <button onclick="javascript:window.location='/users/signup'; ">Sign up</button>
            <!--a href='/users/login'>Log in</a-->
            <button onclick="javascript:window.location='/users/login';">Log in</button>

        <?php endif; ?>

    </div>

    <br>

    <?php if(isset($content)) echo $content; ?>
    <br/>
     <hr/>
 
     <footer   id="disclosure"> 
     This Monkey blog is brought to you by: Guang Long (Harvard DWA15-P2 )<br/>    
      made possible by the instructor Susan Buck and the TFs. --Thanks!  <br><br>
      This site uses <a href="http://asmallorange.com/">A Small Orange </a> to send emails.
      If you think you should get, but not getting emails from monkeyaround.biz, please check your spam filter.
     </footer>
      
</body>
</html>