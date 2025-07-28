<?php
$servername = "localhost";
$username = "your_username"; // InfinityFree username
$password = "your_password"; // InfinityFree password
$database = "your_db"; // InfinityFree DB name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
