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
        <title>Puddle Fanpage Quiz - Result Ash</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="SpiersmeFinalThemeS20.css">
        <link rel="stylesheet" href="SpiersmeFinalQuizS20.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        
    </head>
    <body onload="grabSubtitle()">
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
        <h1><span>Cat Quiz</span></h1>
        <div class = "clear"></div>
            
        <div id="resultCatWrap">
            <div id="resultTextWrap">
                <h2 id="resultHeading">Result :</h2>
                <p id="catNameAsh">ASH</p>
                <p>Strong, regal, and too smart for his own good. The eldest and most bear-like of the cats.</p>
            </div>
            <img src="Ash_pic.jpg" 
                id = "Ash_pic"
                alt="Ash cat picture">
        </div>
    </body>
</html>

        
<!-- References

https://fonts.google.com/specimen/Permanent+Marker

https://fonts.google.com/specimen/Permanent+Marker?sidebar.open&selection.family=Open+Sans

https://www.w3schools.com/html/html_form_input_types.asp

https://www.w3schools.com/tags/att_input_type_radio.asp

https://simplestepscode.com/javascript-quiz-tutorial/

https://stackoverflow.com/questions/8550183/sum-of-values-in-an-array-using-jquery

https://stackoverflow.com/questions/41184963/how-can-push-select-options-into-array-of-object/41185170

https://www.htmlgoodies.com/beyond/javascript/article.php/3724571/using-multiple-javascript-onload-functions.htm

-->