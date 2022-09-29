<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webbanhang';

$conn = new mysqli($servername, $username, $password); 
// set_time_limit(500);
if ($conn->connect_error) {
die("sai bà nó data rồi");
}
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
