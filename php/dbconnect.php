<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$servername = 'localhost';
$username = 'root';
$password = "";
$database = 'agcm';

$conn =  mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die ("Connection failed:". mysqli_connect_error());
}

