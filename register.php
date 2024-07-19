<?php
include 'connection.php';
session_start();

//Values 
if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['firstname'])){
    $firstname= $_POST['firstname'];
} else {
    $firstname= '';
}

if(isset($_POST['middlename'])){
    $middlename= $_POST['middlename'];
} else {
    $middlename= '';
}

if(isset($_POST['lastname'])){
    $lastname= $_POST['lastname'];
} else {
    $lastname= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}

if(isset($_POST['retype_password'])){
    $confirmpass= $_POST['retype_password'];
} else {
    $confirmpass= '';
}

// if(isset($_POST['category'])){
//     $category= $_POST['category'];
// } else {
//     $category= '';
// }

$errMsg='';


if(isset($_POST['retype_password']) && $confirmpass!='' && $confirmpass==$password){
   
    $sql= "SELECT * from PERSONS where email= '$email'";
    $result = mysqli_query($db, $sql);
    $resultArray = $result -> fetch_array(MYSQLI_NUM);
    if($resultArray==[]){
        print($resultArray[0]);
        $sql = "INSERT INTO PERSONS (firstname, othername, surname, email, password, category) VALUES ('$firstname','$middlename', '$lastname', '$email', '$password', 'chef')";
        $result = mysqli_query($db, $sql);

        header("Location: login.php");
        die();
    } 
}




?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body >
    <div class="first-container">
        <div class="fader"></div>
        <div class="register_form">
        <h1>Register</h1>
        <form method="post" action="register.php">
            <input type="hidden" name="signup" value="signup">
            <input class='auth_input' placeholder='First name..' type="text" name="firstname" required><br>
            <input class='auth_input' placeholder='Middle name..' type="text" name="middlename" required><br>
            <input class='auth_input' placeholder='Last name..' type="text" name="lastname" required><br>
            <input class='auth_input' placeholder='Email address..' type="text" type="email" name="email" required><br>
            <input class='auth_input' placeholder='Password..' type="password" name="password" required><br>
            <input class='auth_input' placeholder='Reapeat Password..' type="password" name="retype_password" required><br>
            <div>
            <input class='auth_buttton' type="submit" value="Sign Up">

            </div>            
        </form>
         </div>
        <img class="bgauth" src="images/pexels-jane-trang-doan-793765.jpg" alt="">
        
    </div>
</body>
</html>
