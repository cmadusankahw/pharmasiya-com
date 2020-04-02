<?php

$servername = "localhost";
$username = "accsxaec_pharma";
$password = "admin123";
$db = "accsxaec_pharma";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
//Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
 
?>  


