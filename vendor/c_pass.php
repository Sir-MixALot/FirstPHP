<?php
session_start();    
    require_once 'connection.php';

    $newpassword = $_POST['new_pass'];
    $confirmpassword = $_POST['conf_pass'];  
    $login = $_SESSION['fpass']['login'];
    $email = $_SESSION['fpass']['email'];
    if($newpassword===$confirmpassword){
        $confirmpassword=md5($confirmpassword);
        mysqli_query($connect, "UPDATE `users` SET `password` = '$confirmpassword' WHERE `login` = '$login' and `email` = '$email'");
        unset($_SESSION['fpass']);
        header('Location: ../authorization.php');
        $_SESSION['message'] = 'Password changed successfully!';

    }else{
        header('Location: ../fpass.php');
        $_SESSION['message'] = 'Password mismatch!';
        }
    ?>