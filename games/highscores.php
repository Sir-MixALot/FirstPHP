<?php
session_start();
if(!$_SESSION['user']){
    header('Location: ../index.php'); 
}
require_once '../vendor/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="../basis.css">
        <link rel="stylesheet" href="../users.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>

        <link rel="icon" href="../img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <div class="wrapper">
            <div class="header row">
                <div class="col-1-2">
                    <h1><a href="../vendor/mainlink.php", title="Main">PlayHub</a></h1>
                    <a href="../about.php"><button class="logout" id="about"><span>About</span></button></a>
                </div>
                <div class="col-1-2">
                    <div class="profile">
                    <?php
                        if($_SESSION['user']['login']=='admin'){
                            echo '<a href="../users.php", title="Table of all users"><p class="acc">Users</p></a>';
                        }
                    ?>
                        <a href="../account/profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="../vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                    <?php
                    $game = $_SESSION['game'];
                        $result = mysqli_query($connect, "SELECT `login`,`score` FROM `users`,`scores` WHERE `id` = `user_id` AND `game_id` = '$game' ORDER BY `score` DESC LIMIT 3");
                        if($result){
                            $rows = mysqli_num_rows($result);
                            echo "<table><tr><th>Login</th><th>Score</th></tr>";
                            for ($i = 0 ; $i < $rows ; ++$i)
                            {
                                $row = mysqli_fetch_row($result);
                                echo "<tr>";
                                    for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
                                echo "</tr>";   
                            }
                            echo "</table>";
                            
                        }
                    switch ($game) {
                        case 1:
                            echo ' <form><h1>Top Tetris Players</h1><button id=button3 formaction=tetris.php>Back to the game</button></form>';
                            break;
                        case 2:
                            echo '<form><h1>Top Flappy Bird Players</h1><button id=button3 formaction=flappybird.php>Back to the game</button></form>';
                            break;
                        case 3:
                            echo '<form><h1>Top Snake Players</h1><button id=button3 formaction=snake.php>Back to the game</button></form>';
                            break;
                        case 4:
                            echo '<form><h1>Top Asteroids Players</h1><button id=button3 formaction=asteroids.php>Back to the game</button></form>';
                            break;
                    }
                    ?>
                    
            </div>
        </div>
    </body>
</html>