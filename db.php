<?php

$servername = "newdatabase.czzxdakwk1pg.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "jaideepgrover";
$db = "";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
