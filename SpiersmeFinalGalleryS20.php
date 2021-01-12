<!--
Name: Meredith Spiers
Pawprint: spiersme
Date: 04/19/2020
Final Project: Puddle Fanpage: Picture Gallery
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
        <title>Puddle Fanpage Picture Gallery</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="SpiersmeFinalThemeS20.css">
        <link rel="stylesheet" href="SpiersmeFinalGalleryS20.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script>
        // Modal function
            $(document).ready(function () {
                
            // Get modal
                var modal1 = document.getElementById("myModal1");
                var modal2 = document.getElementById("myModal2");
                var modal3 = document.getElementById("myModal3");
                var modal4 = document.getElementById("myModal4");
                var modal5 = document.getElementById("myModal5");               
                var modal6 = document.getElementById("myModal6");

            // Insert image inside the modal
                var img1 = document.getElementById("myImg1");
                var img2 = document.getElementById("myImg2");
                var img3 = document.getElementById("myImg3");
                var img4 = document.getElementById("myImg4");
                var img5 = document.getElementById("myImg5");
                var img6 = document.getElementById("myImg6");
                var modalImg1 = document.getElementById("img1");
                var modalImg2 = document.getElementById("img2");
                var modalImg3 = document.getElementById("img3");
                var modalImg4 = document.getElementById("img4");
                var modalImg5 = document.getElementById("img5");
                var modalImg6 = document.getElementById("img6");
                
                img1.onclick = function(){
                    modal1.style.display = "block";
                    modalImg1.src = this.src;
                } 
                
                img2.onclick = function(){
                    modal2.style.display = "block";
                    modalImg2.src = this.src;
                } 
                
                img3.onclick = function(){
                    modal3.style.display = "block";
                    modalImg3.src = this.src;
                } 
                
                img4.onclick = function(){
                    modal4.style.display = "block";
                    modalImg4.src = this.src;
                } 
                
                img5.onclick = function(){
                    modal5.style.display = "block";
                    modalImg5.src = this.src;
                } 
                
                img6.onclick = function(){
                    modal6.style.display = "block";
                    modalImg6.src = this.src;
                } 
                
            // Enable span to close
                
                var span1 = document.getElementsByClassName("close")[0];
                var span2 = document.getElementsByClassName("close")[1];
                var span3 = document.getElementsByClassName("close")[2];
                var span4 = document.getElementsByClassName("close")[3];
                var span5 = document.getElementsByClassName("close")[4];
                var span6 = document.getElementsByClassName("close")[5];

                
            // Close the modal
                span1.onclick = function() {
                    var modal1 = document.getElementById("myModal1");
                    modal1.style.display = "none";
                }
                
                span2.onclick = function() {
                    var modal2 = document.getElementById("myModal2");
                    modal2.style.display = "none";
                }                
                
                span3.onclick = function() {
                    var modal3 = document.getElementById("myModal3");
                    modal3.style.display = "none";
                }                
                
                span4.onclick = function() {
                    var modal4 = document.getElementById("myModal4");
                    modal4.style.display = "none";
                }
                                
                span5.onclick = function() {
                    var modal5 = document.getElementById("myModal5");
                    modal5.style.display = "none";
                }
                
                span6.onclick = function() {
                    var modal6 = document.getElementById("myModal6");
                    modal6.style.display = "none";
                }
                
            });
                     
        </script>

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
        <h1><span>PICTURE GALLERY</span></h1>
        
        <!-- Flex container -->
        <div class="flex-container">
<!----------------------------------------------------------------------------->              
            <!-- 1st pic -->
            <div class="card-container"> 
                <img id="myImg1" src="puddle_pic8.png" class="projectPic" alt="Puddle standing in kitchen">
                        
                <!-- The Modal -->
                <div id="myModal1" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img1">
                </div>
            </div>

<!----------------------------------------------------------------------------->              
            <!-- 2nd pic -->
            <div class="card-container"> 
                <img id="myImg2" src="puddle_pic6.png" class="projectPic" alt="Puddle in bathroom">
                        
                <!-- The Modal -->
                <div id="myModal2" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img2">
                </div>
            </div>

<!----------------------------------------------------------------------------->              
            <!-- 3rd pic -->
            <div class="card-container"> 
                <img id="myImg3" src="puddle_pic7.png" class="projectPic" alt="Puddle in bookshelf">
                        
                <!-- The Modal -->
                <div id="myModal3" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img3">
                </div>
            </div>

<!----------------------------------------------------------------------------->              
            <!-- 4th pic -->
            <div class="card-container"> 
                <img id="myImg4" src="puddle_pic5.png" class="projectPic" alt="Puddle being held">
                        
                <!-- The Modal -->
                <div id="myModal4" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img4">
                </div>
            </div>

<!----------------------------------------------------------------------------->              
            <!-- 5th pic -->
            <div class="card-container"> 
                <img id="myImg5" src="puddle_pic4.png" class="projectPic" alt="Puddle with head down">
                        
                <!-- The Modal -->
                <div id="myModal5" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img5">
                </div>
            </div>

<!----------------------------------------------------------------------------->              
            <!-- 6th pic -->
            <div class="card-container"> 
                <img id="myImg6" src="puddle_pic3.png" class="projectPic" alt="Puddle in cat bed with Panini">
        
                <!-- The Modal -->
                <div id="myModal6" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img6">
                </div>
            </div>
<!----------------------------------------------------------------------------->                           
        </div>
    </body>
</html>

<!-- References

https://www.w3schools.com/howto/howto_css_dropdown.asp

https://www.w3schools.com/howto/howto_css_modal_images.asp

https://www.w3schools.com/charsets/ref_html_entities_4.asp

https://www.wikihow.com/Embed-an-Instagram-Post

https://www.instagram.com/puddle_about_house/

https://www.instagram.com/p/B_Y1aU4Av5E/

https://www.instagram.com/p/B_Y0i9RAFMV/

https://www.instagram.com/p/B_YzQjBgOZG/

https://www.instagram.com/p/B_YxwlsgssF/

https://www.instagram.com/p/B_YxfOxAFsD/

https://www.instagram.com/p/B_YxFZWgXDO/

-->