<?php 
$servername = 'localhost';
$username = 'fab';
$psw = '1';
$dbname = 'fantasy-day';

$conn = new mysqli($servername, $username, $psw, $dbname);

if($conn->connect_error) {
  die('Connection failed: ' . $conn->connection_error);
}
?>