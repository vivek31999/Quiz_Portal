<?php
session_start();
include 'dbconnect.php';

$obj = $_GET["obj"];
$adminid = $_SESSION['admin-id'];
$sql = "CREATE TABLE $obj (
    qno INT(6) AUTO_INCREMENT PRIMARY KEY,
    adminid INT(10),
    question VARCHAR(30),   
    option1 VARCHAR(30),
    option2 VARCHAR(30),
    option3 VARCHAR(30),
    option4 VARCHAR(30),
    answer VARCHAR(30)
    )";

$sql1 = "INSERT INTO quizes (adminid,quizname) VALUES ('$adminid','$obj')" ;
    if(mysqli_query($conn,$sql) && mysqli_query($conn, $sql1));
{
    echo $obj;
}   

// if(!){
//     print("Error is".mysqli_error($conn));
// }

mysqli_close($conn);
?>              
    