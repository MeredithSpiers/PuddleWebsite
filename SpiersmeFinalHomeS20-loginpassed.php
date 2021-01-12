<!--
Name: Meredith Spiers
Pawprint: spiersme
Date: 04/19/2020
Final Project: Pud Fanpage: Home, after successful login
-->
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
        <title>Pud Fanpage Home, after successful login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="SpiersmeFinalHomeS20.css">
        <link rel="stylesheet" href="SpiersmeFinalThemeS20.css">
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
        <h1><span>AMERICA'S #1 PUDDLE FANSITE</span></h1>
        
        <!-- Main content wrapper -->
        <div id=mainWrapper class="clear">
            <!-- Top main content section -->
            <div class=mainSections>
                <div class=contentDate>May 3rd, 2020</div>
                <div>Puddle enjoying all the extra time with her people.</div>
                <!-- Homepage Pud pic -->
                <img src="puddle_pic1.jpg" 
                    id = "mainPuddlePic"
                    alt="Puddle being carried">
            </div>
            
            <!-- Bottom main content section -->
            <div class=mainSections>
                <div class=contentDate>May 1st, 2020</div>
                <div>*** UPDATE ***</div>
                <div class=contentText id="mainContent">Our vet has determined that Puddle does not have cat-dwarfism. She is in fact overweight, thus giving her the appearance of short legs.</div>
            </div>
        </div>
        
        <!-- Right side wrapper -->
        <div id=rSideWrapper class="clear">
            
            <!-- Login section -->
            <div action="" id="loginSection" method="POST">
                <div class="loginText">Login successful!</div>
            </div>
            
            <!-- Events section -->
            <div class="rSideSections">Upcoming Events
                <hr>
                <div id="rSideContent">There are no upcoming events at this time, pending conclusion of stay at home orders.</div>
            </div>
        
            <!-- Snapchat section -->
            <div class="rSideSections">Add Puddle on Instagram!
                <a href="https://www.instagram.com/Puddle_About_House/">
                   <img src="instagram_icon.png"
                     id="insta"
                     alt="Instagram Icon"
                     href="https://www.instagram.com/Puddle_About_House/">
                </a>
                <a href="https://www.instagram.com/Puddle_About_House/" id="rSideContent">Username: puddle_about_house</a>
            </div>
        </div> <!-- End right side wrapper -->
    </body>
</html>

<!-- References

https://fonts.google.com/specimen/Permanent+Marker

https://fonts.google.com/specimen/Permanent+Marker?sidebar.open&selection.family=Open+Sans

https://www.w3schools.com/howto/howto_js_toggle_password.asp

https://www.w3schools.com/howto/howto_css_login_form.asp

https://missouri.instructure.com/courses/28042/pages/lecture-24-user-authentication?module_item_id=1756871

--->