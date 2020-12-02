<?php
session_start();
if(!$_SESSION['user']){
    header('Location: index.php'); 
}
require_once 'vendor/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="basis.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="users.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
        <link rel="icon" href="img/PHlogo.ico">
        <title>PlayHub</title>
    </head>
    <body>     
        <div class="wrapper">
            <div class="header row">
                <div class="col-1-2">
                    <h1><a href="vendor/mainlink.php", title="Main">PlayHub</a></h1>
                    <a href="about.php"><button class="logout" id="about"><span>About</span></button></a>
                </div>
                <div class="col-1-2">
                    <div class="profile">
                    <?php
                        if($_SESSION['user']['login']=='admin'){
                            echo '<a href="users.php", title="Table of all users"><p class="acc">Users</p></a>';
                        }
                    ?>
                        <a href="account/profile.php", title="Personal account"><p class="acc"><?= $_SESSION['user']['login'] ?></p></a>
                        <a href="vendor/logout.php"><button class="logout"><span>Logout</span></button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                    <?php
                        $result = mysqli_query($connect, "SELECT `login`,`email`,`blocked`,`id` FROM `users` WHERE `login`<> 'admin'");
                        if($result){
                            $rows = mysqli_num_rows($result);
                            echo "<table><tr><th></th><th>Login</th><th>Email</th><th>Status</th></tr>";
                            for ($i = 0 ; $i < $rows ; ++$i)
                            {
                                $row = mysqli_fetch_row($result);
                                echo "<tr><td><input type=checkbox name=check[" . $row[3] . "]></td>";
                                    for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                                echo "</tr>";   
                            }
                            echo "</table>";
                            
                        }
                    ?>
                    <div class="buttons">
                        <form>
                        <button formaction="vendor/ban.php" id="button1">Ban</button>
                        <button formaction="vendor/unban.php"id="button2">Unban</button>
                        </form>
                    </div>
            </div>
    </body>
</html>