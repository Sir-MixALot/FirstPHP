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
                <div class="row">
                    <div class="col-1-3">
                        <a href="games/tetris.php", title="Tetris">
                        <img src="img/tetris.png" class="tetris"><br>
                        </a>
                    </div>
                    <div class="col-1-3">
                        <a href="games/flappybird.php", title="FlappyBird">
                        <img src="img/bird2.png" class="FlappyBird"><br>
                        <p>Flappy Bird</p>
                        </a>
                    </div>
                    <div class="col-1-3">
                        <a href="games/snake.php", title="Snake">
                        <img src="img/snake.png" class="snake"><br>
                        <p>Snake</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div id="asteroids" class="col-1-3">
                        <a href="games/asteroids.php", title="Asteroids">
                        <img src="img/asteroids.png" class="asteroids"><br>
                        </a>
                    </div>
                </div>
            </div>
    </body>
</html>