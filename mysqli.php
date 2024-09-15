<?php
$servername = "localhost";
$username = "root";
$password = "232312";
$dbname = "IAPDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully  ^_^";
?>