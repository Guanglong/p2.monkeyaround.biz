<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();          
        $this->template->set_global('client_files_head', '<script type="text/javascript" src="/js/users.js"></script>');
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        echo "This is the signup page";        
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";
        # Render template
        echo $this->template;            
    }

    public function p_signup() {
         # More data we want stored with the user
         $_POST['created']  = Time::now();
         $_POST['modified'] = Time::now();
        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);      
        # Create an encrypted token via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
        $user_Id = DB::instance(DB_NAME)->insert('users',$_POST);      
        echo 'you are signed up , this  is your Id:'.$user_Id;
    }
    public function login($error = NULL) {
      # Setup view
      $this->template->content = View::instance('v_users_login');      
       $this->template->title   = "Login";
      # Pass data to the view
      $this->template->content->error = $error;
     # Render template
      echo $this->template;
    }
public function p_login() {

    # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
    $_POST = DB::instance(DB_NAME)->sanitize($_POST);

    # Hash submitted password so we can compare it against one in the db
    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

    # Search the db for this email and password
    # Retrieve the token if it's available
    $q = "SELECT token 
        FROM users 
        WHERE email = '".$_POST['email']."' 
        AND password = '".$_POST['password']."'";

    $token = DB::instance(DB_NAME)->select_field($q);
   //print_r($_POST);
   echo $token;
    # If we didn't find a matching token in the database, it means login failed
    if(!$token) {        
        # Send them back to the login page
       Router::redirect("/users/login/error");

    # But if we did, login succeeded! 
    } else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
       setcookie("token", $token, strtotime('+1 year'), '/');     
        # Send them to the main page - or whever you want them to go
        Router::redirect("/");
    }
}
    public function logout() {
      # Generate and save a new token for next login
    $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

    # Create the data array we'll use with the update method
    # In this case, we're only updating one field, so our array only has one entry
    $data = Array("token" => $new_token);

    # Do the update
    DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

    # Delete their token cookie by setting it to a date in the past - effectively logging them out
    setcookie("token", "", strtotime('-1 year'), '/');

    # Send them back to the main index.
    Router::redirect("/");
    }

    public function profile($user_name = NULL) {
        # If user is blank, they're not logged in; redirect them to the login page
    if(!$this->user) {
        Router::redirect('/users/login');
    }
    # Setup view
    $this->template->content = View::instance('v_users_profile');

    # Set page title
    $this->template->title = "Profile";

    # Create an array of 1 or many client files to be included in the head
    $client_files_head = Array(
        '/css/widgets.css',
        '/css/profile.css'
        );

    # Use load_client_files to generate the links from the above array
    $this->template->client_files_head = Utils::load_client_files($client_files_head);   

    # Pass information to the view fragment
    $this->template->content->user_name = $user_name;

    # Render View
    echo $this->template;
  }
  
  
    public function deleteUser($user_Id=NULL) { 
     $q = "delete from users where user_id = $user_Id";
     echo $q;
     DB::instance(DB_NAME)->query($q);      
     echo "user removed from ".DB_NAME;
    }
} # end of the class