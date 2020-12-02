<?php
session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password=md5($password);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    $check_mail = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if($login==NULL){
    $_SESSION['message'] = 'You have to enter a login!';
    header('Location: ../registration.php');    
    }else if($email==NULL){
    $_SESSION['message2'] = 'You have to enter an email!';
    header('Location: ../registration.php');
    }else{
        if (mysqli_num_rows($check_user) > 0){
            $_SESSION['message'] = 'This login is already taken! Please choose another one.';
            header('Location: ../registration.php');
            }else if(mysqli_num_rows($check_mail) > 0){
            $_SESSION['message2'] = 'A user with such MAIL is already registered! Please choose another one.';
            header('Location: ../registration.php');
            }else{
        
            mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
        
            $check_id = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
            $user = mysqli_fetch_assoc($check_id);
            $_SESSION['userid'] = ["id" => $user['id']];
            $userid = $_SESSION['userid']['id'];
            mysqli_query($connect, "INSERT INTO `scores`(`score_id`, `user_id`, `game_id`, `score`) VALUES (NULL, '$userid',1,0)");
            mysqli_query($connect, "INSERT INTO `scores`(`score_id`, `user_id`, `game_id`, `score`) VALUES (NULL, '$userid',2,0)");
            mysqli_query($connect, "INSERT INTO `scores`(`score_id`, `user_id`, `game_id`, `score`) VALUES (NULL, '$userid',3,0)");
            mysqli_query($connect, "INSERT INTO `scores`(`score_id`, `user_id`, `game_id`, `score`) VALUES (NULL, '$userid',4,0)");
            unset($_SESSION['userid']);
            $_SESSION['message'] = 'Registration completed successfully!';
            header('Location: ../authorization.php');
            }
    }