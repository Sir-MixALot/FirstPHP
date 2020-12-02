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
        <link rel="stylesheet" href="site.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <h1>PlayHub</h1>
        <a href="authorization.php"><button class="but1" style="vertical-align:middle"><span>Log In</span></button></a>
        <br>
        <a href="registration.php"><button class="but2"style="vertical-align:middle"><span>Sign Up</span></button></a>        
    </body>
</html>