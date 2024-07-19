<?php
include 'connection.php';
session_start();

//get form data
if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}

$errMsg='';


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
        <h1>Sign In</h1>
        <form method="post" action="login.php">
            <input type="hidden" name="signin" value="signin">
           <input class='auth_input' placeholder='Email address..' type="text" type="email" name="email" required><br>
            <input class='auth_input' placeholder='Password..' type="password" name="password" required><br>
       <div>
       <?php
                    if(isset($_POST['email']) && isset($_POST['password']) ){
                        $sql= "SELECT firstname, surname, password, category, email from persons where email= '$email'";
                        $result = mysqli_query($db, $sql);
                        $row = $result -> fetch_array(MYSQLI_NUM);
                        if($row!=[]){
                            if ($password==$row[2]) {
                                $_SESSION['loggedin'] = "true";
                                $_SESSION['nirecusermail'] = $row[4];
                                $_SESSION['nirecuser'] = $row[0];
                                $_SESSION['nirecusercat'];
                                header("Location: index.php");
                            } else {
                                echo "invalid username or password";
                            }
                        } else {
                            echo "invalid username or password";
                        }
                    }
                    mysqli_close($db);
                ?>
            </div>
            <div>
            <input class='auth_buttton' type="submit" value="Sign In">
            </div>

            </div>            
        </form>
         </div>
        <img class="bgauth" src="images/election.webp" alt="">
        
    </div>
</body>
</html>
