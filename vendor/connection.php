<?php
 $connect = mysqli_connect('localhost', 'root', '', 'playhub');

 if (!$connect){
     die('Error connect to database');
 }