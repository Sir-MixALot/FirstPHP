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
        <link rel="stylesheet" href="fpass.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <h1><a href="index.php" id="a2">PlayHub</a></h1>
        <form action="vendor/f_pass.php" method="post">
            <label>Login</label>
            <input type="text" name="login">
            <label>Email</label>
            <input type="email" name="email">
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
