<?php
include 'connection.php';
session_start();
// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
// $result = mysqli_query($mysqli, $sql);


// // Fetch all
// mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// mysqli_free_result($result);

// mysqli_close($mysqli);
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
    <nav class="home-nav">
        <div class="logo">NIREC</div>
        <div class="links">
            <<a class="navlink" style="color: #15852d;" href="index.php">home</a>
            <a href='adminuser.php' class="navlink">admin</a>
            <a class="navlink">news</a>
            <a class="navlink">about</a>
            <a class="navlink" href="blog.php">contact us</a>
        </div>
        <div>
            <input type="search" class='search' name="search" placeholder="Search..">
        </div>
        <div class="links">
        <a class="link" href=""><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'welcome '.$_SESSION['username'];
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                // echo 'Sign Up';
              echo  '<a class="link" href="register.php">Sign Up<a>';
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo '<a class="link" href="signin.php">Sign In<a>';
            } 
            ?> </a>
            <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo '<a class="link" href="logout.php">Log Out<a>';
            } 
            ?> </a>
        </div>
    </nav>
</body>
</html>