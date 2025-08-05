<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "krum";

// Connect to database
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get and sanitize input
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$rating = intval($_POST['rating']);
$comments = $conn->real_escape_string($_POST['comments']);

// Insert into feedback table
$sql = "INSERT INTO feedbackk (name, email, rating, comments) VALUES ('$name', '$email', $rating, '$comments')";

if ($conn->query($sql) === TRUE) {
  echo "Feedback saved";
} else {
  http_response_code(500);
  echo "Error: " . $conn->error;
}

$conn->close();
?>
