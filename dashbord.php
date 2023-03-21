<?php
$con=mysqli_connect("localhost","root","","raj");

session_start();

if(!isset($_SESSION['name']))
{
		header("logout.php");
}
?>
<h1 align="center">welcome</h1>
<a href="logout.php"><h4 align="right">LOGOUT</h4></a>