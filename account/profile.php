<?php
session_start();
if(!$_SESSION['user']){
    header('Location: ../index.php'); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="../basis.css">
        <link rel="import" href="../basis.html">
        <link rel="stylesheet" href="profile.css">
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
                        <a href="profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="../vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <h1><?= $_SESSION['user']['login'] ?></h1>
                <div class="navigation-row">
                    <form>
                    <button formaction="scores.php" id="button1">Scores</button>
                    <button formaction="password.php" id="button2">Change Password</button>
                    <button formaction="personal.php" id="button3">Personal Info</button>
                    <button formaction="../vendor/deletion.php" id="button4">Delete Account</button>
                    </form>
                </div>
            </div>
    </body>
</html>