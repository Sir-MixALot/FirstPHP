<?php
session_start();    
    require_once 'connection.php';

    $old = md5($_POST['oldpassword']);
    $new = md5($_POST['newpassword']);  
    $login = $_SESSION['user']['login'];
    
    if($old!=$_SESSION['user']['password']){
        $_SESSION['message'] = 'Wrong password!';
        header('Location: ../account/password.php');
    }else if($new=='d41d8cd98f00b204e9800998ecf8427e'){
        $_SESSION['message'] = 'Enter new password!';
        header('Location: ../account/password.php');
    }else{
        mysqli_query($connect, "UPDATE `users` SET `password` = '$new' WHERE `login` = '$login'");
        unset($_SESSION['user']);
        $_SESSION['message'] = 'Password changed successfully!';
        header('Location: ../authorization.php');
    } 
    ?>