<?php
$servername = "fdb4.biz.nf";
$username = "1821517_mic";
$password = "asgQdc988";
$dbname = "1821517_mic";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>