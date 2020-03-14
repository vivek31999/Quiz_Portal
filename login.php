<?php

session_start();

include 'dbconnect.php';

$email = $_POST['email'];
$pass = $_POST['password'];
if(isset($_POST['admin']) && intval($_POST['admin'])==1){
    $admin = $_POST['admin'];

    if($admin!=null)
    {
        $sql1 = "SELECT email,pass,name,adminid FROM admin WHERE email='$email' AND pass= '$pass' ";
        $result = mysqli_query($conn, $sql1 );
        $num = mysqli_num_rows($result);
        $row= mysqli_fetch_array($result);
        if($num == 1 ){
            $_SESSION['admin-name'] = $row['name'];
            $_SESSION['admin-id'] = $row['adminid'];
            header("location:admin-dashboard.php");
        }       
        else{
            echo "$email"." is not in database ";
        }
    }   
}
else if(isset($_POST['admin']) && intval($_POST['admin'])==2)
    {
        $cand = $_POST['admin'];
    
        if($cand!=null)
        {
            $sql2 = "SELECT email,pass,name FROM candidate WHERE email='$email' AND pass= '$pass' ";
            $result = mysqli_query($conn, $sql2 );
            $num = mysqli_num_rows($result);
            $row= mysqli_fetch_array($result);
            if($num == 1 )
            {
                $_SESSION['name'] = $row['name'];
                header('location: quiz.php');
            }
            else{
                echo "$email"." is not in candidate ";
            }
        } 
}


?>