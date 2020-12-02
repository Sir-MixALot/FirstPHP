<?php
session_start();    
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];  

    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `email` = '$email'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['fpass'] = [
            "login" => $user['login'],
            "email" => $user['email']
        ];
        header('Location: ../change_pass.php');
        }else{
            header('Location: ../fpass.php');
            $_SESSION['message'] = 'Wrong login or email!';
        }
    ?>