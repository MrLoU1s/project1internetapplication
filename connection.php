<?php
$servername = "localhost";
$username = "username";
$password = "232312";
$dbname = "IAPDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $IAPDB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully  :)";
?>