<?php
$con=mysqli_connect("localhost","root","","raj");

session_start();

if(!isset($_POST['name']))
{
		header("logout.php");
}
?>
<h1>welcome</h1>