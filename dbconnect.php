<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
