<?php 
session_start();
$servername = 'localhost';
$username = 'root';
$psw = '1';
$dbname = 'fantasyday';

$conn = new mysqli($servername, $username, $psw, $dbname);

if($conn->connect_error) {
  die('Connection failed: ' . $conn->connection_error);
}
?>