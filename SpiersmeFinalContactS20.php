<!--
Name: Meredith Spiers
Pawprint: spiersme
Date: 04/30/2020
Final Project: Puddle Fanpage: Contact
-->

<!-- Check if username is stored in a cookie to prevent URL hacking -->
<?php

    $username=empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
    
    if(!$username){
        header("Location: SpiersmeFinalHomeS20-login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Puddle Fanpage Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="SpiersmeFinalThemeS20.css">
        <link rel="stylesheet" href="SpiersmeFinalContactS20.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    </head>
    <body>
        <!-- Navigation Bar -->
        <div id="navBar"></div>
        
        <!--Home link-->
        <a href="SpiersmeFinalHomeS20-loginpassed.php" class="navTabs" id="navHome">HOME</a>
        
        <!--Quiz link-->
        <a href="SpiersmeFinalQuizS20.php" class="navTabs" id="navQuiz">QUIZ</a> 
        
        <!--Gallery dropdown link-->
        <div class="dropdown">  
            <button class="navTabs" id="navGallery">GALLERY  &or;</button>
            <div class="dropdown-content">
                <a href="SpiersmeFinalGalleryS20.php">Pictures</a>
                <a href="SpiersmeFinalVideosS20.php">Videos</a>
            </div>
        </div>
        
        <div class = "clear"></div>
        
        <!--Contact link-->
        <a href="SpiersmeFinalContactS20.php" class="navTabs" id="navContact">CONTACT</a> 
        
        <!--Logout link-->
        <a href="SpiersmeFinalLogout.php" class="navTabs" id="navLogout">LOGOUT</a> 
 
        <div class = "clear"></div>
        
        <!-- Page Title -->
        <h1><span>Contact Puddle</span></h1>
            
            <!-- Form wrapper -->
            <div id=formWrapper class="clear">
                <div>It's understandable that you would want to contact or visit Puddle.</div>
                <div>Please fill out the form below.</div>
                <hr>
                <form action="Spiersme_contact.php" method="post">
                    <input type=hidden name="action" value="initiateContact">
                    <label for="email">Email: *</label>
                    <input type="text" id=email name="email"><br><br>
                    <label for="subject">Subject: *</label>
                    <input type="text" id=subject name="subject"><br><br>
                    <label for="message">Message: *</label>
                    <textarea id="message" name="message" placeholder="Type your message here..."></textarea><br><br>
                    <div>If you are interested in visiting Puddle. Select a date that works for you below.</div><br>
                    <label for="date">Date: </label>
                    <input type="date" id=date name="date"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        
            <!-- Picture wrapper -->
            <div id=pictureWrapper class="clear">
                <img src="puddle_pic8_shopped.png" 
                    id =sidePuddlePic
                    alt="Puddle looking up">
            </div>
    </body>
</html>
<!------------- References -----------------

https://fonts.google.com/specimen/Permanent+Marker

https://fonts.google.com/specimen/Permanent+Marker?sidebar.open&selection.family=Open+Sans

https://www.w3schools.com/html/html_form_elements.asp

https://www.w3schools.com/html/html_form_input_types.asp

-------------------------------------------->