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

$conn->close();
?>
