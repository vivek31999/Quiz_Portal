<?php
session_start();
include 'dbconnect.php';
$sql = "SELECT quizid,quizname FROM quizes WHERE adminid='".$_SESSION['admin-id']."' ";
$result = mysqli_query($conn, $sql);
$quizes = mysqli_fetch_all($result,MYSQLI_ASSOC);
// $quizes = json_encode($quizes);
echo json_encode($quizes);
?>