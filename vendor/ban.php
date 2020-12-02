<?php
session_start();
require_once 'connection.php';

var_dump();

mysqli_query($connect, "UPDATE `users` SET `blocked` = 1 WHERE `login` = 'Polly'");
header('Location: ../users.php');