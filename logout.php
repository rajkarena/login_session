<?php
$con=mysqli_connect("localhost","root","","raj");
session_start();
session_destroy();
header("location:login.php");
?>

