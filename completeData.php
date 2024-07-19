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
   
    $sql0= "SELECT firstname, lastname, password, type from users where email= '$email'";
    $result0 = mysqli_query($db, $sql0);
    $result0Array = $result0 -> fetch_array(MYSQLI_NUM);
    if($result0Array==[]){
        print($result0Array[0]);
        $sql = "INSERT INTO users (firstname, lastname, email, password, type) VALUES ('$firstname', '$lastname', '$email', '$password', 'chef')";
        $result = mysqli_query($db, $sql);

        header("Location: login.php");
        die();
        // // Fetch all
        // mysqli_fetch_all($result, MYSQLI_ASSOC);
    } 
}





// mysqli_close($mysqli);


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
        <h1>Complete Voter Registration</h1>
        <form method="post" action="register.php">
            <input type="hidden" name="signup" value="signup">
            <input class='auth_input' placeholder='First name..' type="text" name="firstname" required><br>
            <input class='auth_input' placeholder='Middle name..' type="text" name="middlename" required><br>
            <input class='auth_input' placeholder='Last name..' type="text" name="lastname" required><br>
            <input class='auth_input' placeholder='Email address..' type="text" type="email" name="email" required><br>
            <input class='auth_input' placeholder='NIN..' type="text" name="nin" required><br>
            <input class='auth_input' placeholder='sex' type="text" name="sex" required><br>
            <input class='auth_input' placeholder='Date of birth..' type="date" name="dob" required><br>
            <input class='auth_input' placeholder='State of Origin..' type="text" name="soo" required><br>
            <input class='auth_input' placeholder='LGA of Origin..' type="text" name="lgao" required><br>
            <label for="address">Address></label>
            <input class='auth_input' placeholder='line 1..' type="text" name="email" required><br>
            <input class='auth_input' placeholder='line 2..' type="text" name="email" required><br>
            <input class='auth_input' placeholder='LGA..' type="text" name="lga" required><br>
            <input class='auth_input' placeholder='State..' type="text" name="state" required><br>
            <label for="photo1">Photo 1</label>
            <input type="file">
            <label for="photo2">Photo 2</label>
            <input type="file">
            <div>
            <input class='auth_buttton' type="submit" value="Sign Up">

            </div>            
        </form>
         </div>
        <img class="bgauth" src="images/pexels-jane-trang-doan-793765.jpg" alt="">
        
    </div>
</body>
</html>