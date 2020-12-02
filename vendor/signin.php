<?php
session_start();    
    require_once 'connection.php';

    $login = $_POST['login'];
    $password = $_POST['password'];  
    $password=md5($password);    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "password" => $user['password'],
            "blocked" => $user['blocked']

        ];

        if($_SESSION['user']['login']=='admin'){
            header('Location: ../main.php');
        }
        else if($_SESSION['user']['blocked']==1){
            header('Location: ../blocked.php');
        }else{
            header('Location: ../main.php');
        }
    }else{
        $_SESSION['message'] = 'Wrong login or password!';
        header('Location: ../authorization.php');
    }
    ?>