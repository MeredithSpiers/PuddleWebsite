<!--
Name: Meredith Spiers
Pawprint: spiersme
Date: 04/30/2020
Final Project: Puddle Fanpage: Quiz
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
        <title>Puddle Fanpage Quiz</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="SpiersmeFinalThemeS20.css">
        <link rel="stylesheet" href="SpiersmeFinalQuizS20.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        
        <script>
            //AJAX grabs subtitle
            function grabSubtitle() {   
                $.get("http://ec2-54-89-137-97.compute-1.amazonaws.com/Final%20Project/SpiersmeFinalQuiz-subtitle.php",
                    function(data) {
                    document.getElementById("subtitle").innerHTML = data;
                });  
            }
            
        </script>
        
    </head>
    <body onload="grabSubtitle(); hideAll();">
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
        <h2 id="subtitle"></h2>
        <div class = "clear"></div>
        
        <div id="questionsWrapper">
            <form action="SpiersmePHPQuiz.php" method="get">
            
                <!-- Question 1 -->
                <div class="questions" name="question1">1. What is your favorite food?<br>
                    <input type="radio" id="1A" name="food" value="0">
                    <label class="answers" for="male">A. Meat</label><br>
                    <input type="radio" id="1B" name="food" value="1">
                    <label class="answers" for="female">B. Vegan Kelp Jerky</label><br>
                    <input type="radio" id="1C" name="food" value="4">
                    <label class="answers" for="other">C. Flesh of those subservient to you</label>
                </div>
            
                <!-- Question 2 -->
                <div class="questions" name="question2">2. What is your best quality?<br>
                    <input type="radio" id="2A" name="best" value="0">
                    <label class="answers" for="male">A. Intellect</label><br>
                    <input type="radio" id="2B" name="best" value="1">
                    <label class="answers" for="female">B. Kindness</label><br>
                    <input type="radio" id="2C" name="best" value="4">
                    <label class="answers" for="other">C. Playfulness</label>
                </div>
            
                <!-- Question 3 -->
                <div class="questions" name="question3">3. What is your worst quality?<br>
                    <input type="radio" id="3A" name="worst" value="0">
                    <label class="answers" for="male">A. Jealousy</label><br>
                    <input type="radio" id="3B" name="worst" value="1">
                    <label class="answers" for="female">B. Lack of self-awareness</label><br>
                    <input type="radio" id="3C" name="worst" value="4">
                    <label class="answers" for="other">C. Inability to focus</label>
                </div>
                <button id="submit">Submit</button>
            </form>
        
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