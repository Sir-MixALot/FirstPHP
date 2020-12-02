<?php
session_start();    
    if($_SESSION['user']['blocked']==1){
        header('Location: ../blocked.php');
        }else{
            header('Location: ../main.php');
        }
    ?>