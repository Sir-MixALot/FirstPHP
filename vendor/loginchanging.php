<?php
session_start();    
    require_once 'connection.php';

    $new = $_POST['newnick'];  
    $login = $_SESSION['user']['login'];
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$new'");

    if (mysqli_num_rows($check_user) > 0){

    $_SESSION['message'] = 'This login is already taken! Please choose another one.';
    header('Location: ../account/personal.php');
    }else if($new==''){
        $_SESSION['message'] = 'Enter new login!';
        header('Location: ../account/personal.php');
    }else{
        mysqli_query($connect, "UPDATE `users` SET `login` = '$new' WHERE `login` = '$login'");
        unset($_SESSION['user']);
        $_SESSION['message'] = 'Nickname changed successfully!';
        header('Location: ../authorization.php');
    } 
    ?>