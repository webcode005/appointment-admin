<?php
session_start();
$servername = "localhost";
$username = "shipgoij_titan_kaleem";
$password = "k@]gv9#qyH2O";
$dbname = "shipgoij_titan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>