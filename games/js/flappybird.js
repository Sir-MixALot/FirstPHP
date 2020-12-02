var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");

var bird = new Image();
var bg = new Image();
var fg = new Image();
var pipeUp = new Image();
var pipeDown = new Image();
var fly_sound = new Audio();
var score_sound = new Audio();

bird.src = "../img/bird.png";
bg.src = "../img/bg.png";
fg.src = "../img/fg.png";
pipeUp.src = "../img/pipeUp.png";
pipeDown.src = "../img/pipeDown.png";
fly_sound.src = "../audio/fly.mp3";
score_sound.src = "../audio/score.mp3";

var gap=90;
var xPos=10;
var yPos=180;
var gravitation = 1.5;
var score = 0;
var pipe = [];
pipe[0]={
    x : canvas.clientWidth,
    y : 0
}

document.addEventListener("keydown", moveUp);

function moveUp(){
    yPos-=28;
    fly_sound.play();
}

function draw (){
    context.drawImage(bg, 0, 0);
    for (var i=0; i<pipe.length; i++){
        context.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        context.drawImage(pipeDown, pipe[i].x, pipe[i].y + pipeUp.height + gap);
        pipe[i].x--;

        if (pipe[i].x==125){
            pipe.push({
                x: canvas.clientWidth,
                y:Math.floor(Math.random()*pipeUp.height) - pipeUp.height
            });
        }

        if(xPos + bird.width>=pipe[i].x
            && xPos <= pipe[i].x + pipeUp.width
            && (yPos<=pipe[i].y + pipeUp.height 
                || yPos + bird.height>= pipe[i].y + pipeUp.height + gap)
                 || yPos + bird.height>=canvas.height - fg.height){   
                    document.getElementById("score").value=score;
                    pipeDown.onload();  
                    
        }

        if (pipe[i].x==5){
            score++;
            score_sound.play();
        }
    }
    
    context.drawImage(fg, 0, canvas.height - fg.height);
    context.drawImage(bird, xPos, yPos);
    yPos+=gravitation; 
    context.fillStyle = "#000";
    context.font = "24px Verdana";
    context.fillText("Score: " + score, 10, canvas.height - 20);
    requestAnimationFrame(draw);
}

pipeDown.onload = draw;