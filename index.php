<?php
include 'connection.php';
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
    <div class="first-container">
        <div class="fader"></div>
        <div class='nav_bar'>
        <?php
        include "navbar.php";
        ?>
        </div>
        <div class="home-text">
        
            <div>Welcome to NIREC</div>
            <div style='font-size: 13px;'>Vote Today, Make a difference</div>  
            <a href="register.php"><button class="get-started">Register</button></a>
         </div>
        <img class="bg1" src="./images/election.webp" alt="">
        
    </div>
</body>
</html>