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
        <link rel="stylesheet" href="authorization.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <h1>PlayHub</h1>
        <form action="vendor/signin.php" method="post">
            <label>Login</label>
            <input type="text" name="login">
            <label>Password</label>
            <input type="password" name="password">
            <button class="but1" type="submit"><span>Login</span></button>
            <p>New to Playhub? <a href="registration.php">Sign Up Now!</a></p>
            <p><a href="fpass.php">Forgot your password?</a></p>
            <?php
                if($_SESSION['message']){
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>    
    </body>
</html>
