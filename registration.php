<?php
session_start();

if($_SESSION['user']){
    header('Location: main.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="registration.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <h1>PlayHub</h1>
        <form action="vendor/signup.php" method="post">
        
            <label>Login</label>
            <input type="text" name="login">
            <?php
                if($_SESSION['message']){
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
            <label>Email</label>
            <input type="email" name="email">
            <?php
                if($_SESSION['message2']){
                    echo '<p class="msg"> ' . $_SESSION['message2'] . ' </p>';
                }
                unset($_SESSION['message2']);
            ?>
            <label>Password</label>
            <input type="password" name="password">
            <button class="but1" type="submit"><span>SignUp</span></button>
            <p>Already have an accaunt? <a href="authorization.php">Log In Now!</a></p>
            
        </form>    
    </body>
</html>
