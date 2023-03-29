<?php

$connection = mysqli_connect('localhost','root', '','php_simulate_project');
if(!$connection){
    die('Error'.mysqli_error());
}
session_start();