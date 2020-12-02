<?php
session_start();
require_once 'connection.php';
$user_id = $_SESSION['user']['id'];
$game_id = $_SESSION['game'];
$score = $_POST['scorre'];
$old_score = mysqli_query($connect, "SELECT `score` FROM `scores` WHERE `user_id` = '$user_id' AND `game_id` = '$game_id'");
$old = mysqli_fetch_row($old_score);
if($score>$old[0]){
    mysqli_query($connect, "UPDATE `scores` SET `score` = '$score' WHERE `user_id` = '$user_id' AND `game_id` = '$game_id'");
}

switch ($game_id) {
    case 1:
        header('Location: ../games/tetris.php');
        break;
    case 2:
        header('Location: ../games/flappybird.php');
        break;
    case 3:
        header('Location: ../games/snake.php');
        break;
    case 4:
        header('Location: ../games/asteroids.php');
        break;
}
