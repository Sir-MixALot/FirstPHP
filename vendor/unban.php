<?php
session_start();
require_once 'connection.php';
mysqli_query($connect, "UPDATE `users` SET `blocked` = 0 WHERE `login` = 'Polly'");
header('Location: ../users.php');