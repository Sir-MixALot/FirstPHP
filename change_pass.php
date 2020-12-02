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
        <link rel="stylesheet" href="change_pass.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <h1><a href="index.php" id="a2">PlayHub</a></h1>
        <form action="vendor/c_pass.php" method="post">
            <label>New Password</label>
            <input type="password" name="new_pass">
            <label>Confirm Password</label>
            <input type="password" name="conf_pass">
            <button class="but1" type="submit"><span>Change password</span></button>
            <?php
                if($_SESSION['message']){
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>    
    </body>
</html>
