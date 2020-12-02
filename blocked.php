<?php
session_start();
if(!$_SESSION['user']){
    header('Location: index.php'); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="basis.css">
        <link rel="import" href="basis.html">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="blocked.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <div class="wrapper">
            <div class="header row">
                <div class="col-1-2">
                    <h1><a href="vendor/mainlink.php", title="Main">PlayHub</a></h1>
                    <a href="about.php"><button class="logout" id="about"><span>About</span></button></a>
                </div>
                <div class="col-1-2">
                    <div class="profile">
                        <a href="account/profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <h1 class="message">Sorry, but your account has been blocked!</h1>
            </div>
    </body>
</html>