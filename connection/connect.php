<?php

//main connection file for both admin & front end
$servername = "clouddatabase.cmwbceima2h5.us-east-1.rds.amazonaws.com"; //server
$username = "admin"; //username
$password = "admin1234"; //password
$dbname = "onlinefoodphp";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>