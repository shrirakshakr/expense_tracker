<?php
include("config.php");
session_start();

if (!isset($_SESSION["email"])) {
  header("Location: login.php");
  exit();
}

$sess_email = $_SESSION["email"];
$sql = "SELECT user_id, first_name, last_name, email FROM users WHERE email = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $sess_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $userid = $row["user_id"];
    $firstname = $row["first_name"];
    $lastname = $row["last_name"];
    $username = $row["first_name"] . " " . $row["last_name"];
    $useremail = $row["email"];
  }
} else {
  $userid = "798";
  $username = "SJEC";
  $useremail = "mailid@domain.com";
}

$stmt->close();
$con->close();
?>