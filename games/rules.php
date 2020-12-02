<?php
session_start();
if(!$_SESSION['user']){
    header('Location: ../index.php'); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="../basis.css">
        <link rel="stylesheet" href="rules.css">
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
                    switch ($game) {
                        case 1:
                            echo '<form>
                            <h1>Tetris</h1>
                            <p>"Tetris" is a puzzle built on the use of geometric figures "tetramino" - a variety of polymino, consisting of four squares.</p>
                            <p>
            Random tetramino figures fall from above into a rectangular glass with a width of 10 and a height of 20 cells. In flight, the player can rotate the figure 90 ° and move it horizontally. You can also “reset” the figure, that is, accelerate its fall, when it is already decided where the figure should fall. The figure flies until it stumbles upon another figure or on the bottom of the glass. If at the same time a horizontal row of 10 cells is filled, it disappears and everything above it falls by one cell.</p>
                            <p>
                            The pace of the game is gradually accelerating. The game ends when the new figure cannot fit into the glass. The player receives points for each row completed, so his task is to fill the rows without filling the glass itself (vertically) as long as possible, in order to get as many points as possible.</p>
                            <button formaction=tetris.php>Back to the game</button>          
                            </form>';
                            break;
                        case 2:
                            echo '<form>
                            <h1>Flappy Bird</h1>
                            <p>
            Flappy Bird is a game for mobile devices developed by Vietnamese developer Dong Nguyen, in which the player, using the touch of the screen, must control the flight of the bird between the rows of green pipes without touching them.</p>
                            <p>
            Flappy Bird has a gameplay featuring 2D graphics. The goal of the game is to control the flight of a bird, which continuously moves between rows of green pipes. When faced with them, the game ends. Management is carried out by pressing any key on the keyboard, in which the bird makes a small jerk up. In the absence of jerking, the bird falls due to gravity, and the game also ends. Points are accumulated with each successful flight between two tubes. The gameplay is unchanged throughout the game.</p>
                            <button formaction=flappybird.php>Back to the game</button>          
                            </form>';
                            break;
                        case 3:
                            echo '<form>
                            <h1>Snake</h1>
                            <p>Snake is a computer game that originated in the mid or late 1970s.</p>
                            <p>The player controls a long, thin creature resembling a snake that crawls along a plane bounded by walls, collecting food, avoiding a collision with its own tail and the edges of the playing field.</p>
                            <p>Each time the snake eats a piece of food, it becomes longer, which gradually complicates the game.</p>
                            <p>The player controls the direction of movement of the head of the snake (usually 4 directions: up, down, left, right), and the tail of the snake moves next. The player cannot stop the movement of the snake.</p>
                            <button formaction=snake.php>Back to the game</button>          
                            </form>';
                            break;
                        case 4:
                            echo '<form>
                            <h1>Asteroids</h1>
                            <p>Asteroids is an arcade game released by Atari in 1979. It has become one of the most famous games of the golden age of arcade games.</p>
                            <p>The goal of the game is to score as many points as possible by shooting at asteroids, avoiding collisions with them. The player controls the spaceship in the form of an arrow, which can rotate left and right, as well as move and shoot, but only forward. The player has three lives, which are displayed in the upper left corner as arrows. When colliding with an asteroid, one life is wasted, when all lives end - the game ends. During the movement, the impulse is not saved: if you do not turn on the engine, the ship will gradually stop.</p>
                            <p>
            Each level begins with the appearance of several asteroids drifting at random points on the screen. The edges of the screen are wrapped to each other, for example, an asteroid extending beyond the upper edge of the screen appears on the bottom and continues to move in the same direction. When a player hits an asteroid, it breaks up into debris that is smaller, but moving faster.</p>
                            <button formaction=asteroids.php>Back to the game</button>          
                            </form>';
                            break;
                    }
                ?>                  
            </div>
        </div>
    </body>
</html>