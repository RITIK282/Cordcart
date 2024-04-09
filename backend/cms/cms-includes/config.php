<?php

include 'functions.php';

$host = "localhost";
$user = "root";
$password = "";
$userdb = "codekart";
//$internaldb = "codekart_internal";

session_start();

$conn_1 = mysqli_connect($host, $user, $password,$userdb);
// Check connection
if (!$conn_1) {
 die("Connection failed: " . mysqli_connect_error());
}

// $conn_2 = mysqli_connect($host, $user, $password,$opendb);
// // Check connection
// if (!$conn_2) {
//  die("Connection failed: " . mysqli_connect_error());
// }
