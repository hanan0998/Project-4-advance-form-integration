<?php

$connection = mysqli_connect('localhost', 'root' , '' , 'login-form');
if(!$connection){
    echo "connection Failed!!";
    die();
}