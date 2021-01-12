<?php

// Check is user is visiting for the first time
    $username = empty ($_COOKIE=['username']) ? '' : $_COOKIE['username'];

// if already logged in, send to Home
    if ($username){
        header("Location: SpiersmeFinalHomeS20-loginpassed.php");
    }

handle_login();
/*
    $action = empty($_POST['action']) ? false : $_POST['action'];

    if ($action == 'initiateLogin') {
	   // Manages a login submit
        handle_login();
    } else {
        // Shows the login form
        handle_login();
    }
*/
function handle_login(){
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['password']) ? '' : $_POST['password'];
	// if the username and password is correct	
    if ($username=='test' && $password=='pass') {
        setcookie('username', $username);
        header("Location: SpiersmeFinalHomeS20-loginpassed.php");
        exit;
    }
    // if the username or password are incorrect
    else {
        $error = "Incorrect username or password. Please try again.";
        require "SpiersmeFinalHomeS20-loginfailed.php";
    }
}
/*
function login_form(){
    $username="";
    $password="";
    require "SpiersmeFinalHomeS20-loginfailed.php";
}
*/
/***** References ******

https://www.w3schools.com/php/php_if_else.asp

https://stackoverflow.com/questions/42764307/how-to-display-login-error-message-on-the-same-page-in-a-php-based-system/42767126

https://missouri.instructure.com/courses/28042/pages/lecture-24-user-authentication?module_item_id=1756871

https://www.ntchosting.com/encyclopedia/scripting-and-programming/php/php-in/

*/
?>

