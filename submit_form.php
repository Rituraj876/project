<?php
include "db.php";

$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students (name, age, class, email, phone)
        VALUES ('$name', $age, '$class', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "Application submitted successfully. <a href='index.html'>Go Back</a>";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>
