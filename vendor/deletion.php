<?php
session_start();
require_once 'connection.php';
$login=$_SESSION['user']['login'];
$uid=$_SESSION['user']['id'];
if($login=='admin'){
    mysqli_query($connect, "UPDATE `users` SET `blocked` = 0 WHERE `blocked` = 1");
}
mysqli_query($connect, "DELETE FROM `scores` WHERE `user_id` = '$uid'");
mysqli_query($connect, "DELETE FROM `users` WHERE `login` = '$login'");
unset($_SESSION['user']);
header('Location: ../index.php');
?>