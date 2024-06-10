<?php
/*
$servername = "localhost";
$database = "elba";
$username = "elbadataBase";
$password = "Bed4v0$1";
// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
*/

$servername = "localhost";
$database = "cafeotomation";
$username = "root";
$password = "";
// Create connection
$db = mysqli_connect($servername, $username, $password, $database);

// Check connection 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
 //echo "Connected successfully";
