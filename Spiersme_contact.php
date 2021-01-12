<?php

$action = empty($_POST['action']) ? false : $_POST['action'];

    if ($action == 'initiateContact') {
	   // Manages a login submit
        handle_login();
    } else {
        // Shows the login form
        login_form();
    }

function handle_login(){
    $email = empty($_POST['email']) ? '' : $_POST['email'];
    $subject = empty($_POST['subject']) ? '' : $_POST['subject'];
    $message = empty($_POST['message']) ? '' : $_POST['message'];
    $date = empty($_POST['date']) ? '' : $_POST['date'];
	
    // if submit attempt is missing the email, subject or message
    if (!$email || !$subject || !$message) {
        $error = "Error: Please make sure you have entered an email, subject, and message.";
        require "SpiersmeFinalContactS20-failed.php";
    }
    // if submit attempt has met all the requirements
    else {
        header("Location: SpiersmeFinalContactS20-sent.php");
        exit;
    }
}

function login_form(){
    $email="";
    $subject="";
    $message="";
    require "SpiersmeFinalContactS20-failed.php";
}

?>