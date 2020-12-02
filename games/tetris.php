<?php
session_start();
$_SESSION['game'] = 1;
if(!$_SESSION['user']){
    header('Location: ../index.php'); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="../basis.css">
        <link rel="stylesheet" href="tetris.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>

        <link rel="icon" href="../img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <div class="wrapper">
            <div class="header row">
                <div class="col-1-2">
                    <h1><a href="../vendor/mainlink.php", title="Main">PlayHub</a></h1>
                    <a href="../about.php"><button class="logout" id="about"><span>About</span></button></a>
                </div>
                <div class="col-1-2">
                    <div class="profile">
                    <?php
                        if($_SESSION['user']['login']=='admin'){
                            echo '<a href="../users.php", title="Table of all users"><p class="acc">Users</p></a>';
                        }
                    ?>
                        <a href="../account/profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="../vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <form action="../vendor/score.php" method="post">
                <input id="score" type="hidden" name="scorre">
                <button class="but1" id="button1" formaction="rules.php"><span>Rules</span></button>
                <button class="but1" id="button2" type="submit"><span>Save & Restart</span></button>
                <button class="but1" id="button3" formaction="highscores.php"><span>Best players</span></button>
                <canvas id="my-canvas"></canvas>
                <script src="js/tetris.js"></script>
                </form>
            </div>
        </div>
    </body>
</html>