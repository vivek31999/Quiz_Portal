<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['admin-name']);
header('location: loginForm.php');
?>