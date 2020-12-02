<?php
session_start();
if(!$_SESSION['user']){
    header('Location: index.php'); 
}
require_once 'vendor/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="basis.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="about.css">
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
                    <?php
                        if($_SESSION['user']['login']=='admin'){
                            echo '<a href="users.php", title="Table of all users"><p class="acc">Users</p></a>';
                        }
                    ?>
                        <a href="account/profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                
                    <p id="one">This website is for entertainment purposes only!</p>
                    <p id="one">You can enjoy the games below:</p>
                    <p id="one"><img id="img" src="img/tetris.png"> - Tetris</p>
                    <p id="one"><img id="img" src="img/bird2.png"> - Flappy Bird</p>
                    <p id="one"><img id="img" src="img/snake.png"> - Snake</p>
                    <p id="one"><img id="img" src="img/asteroids.png"> - Asteroids</p>
                    <p>Thanks for using this website!</p>
                    <p>This website was developed by a student of the 28TP group, Sergey Gorshkov.</p>  
                    <p>MGKE - 2020</p>  
            </div>
    </body>
</html>