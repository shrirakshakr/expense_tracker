<?php
$con = mysqli_connect("localhost", "root", "", "dailyexpense");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . " | Seems like you haven't created the DATABASE with an exact name";
  exit();
}

// Set the character set to utf8mb4
mysqli_set_charset($con, "utf8mb4");

// Additional configuration settings can be added here if needed
?>