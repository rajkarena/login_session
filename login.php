<html>
<head>
</head> 
<body>

<form method="POST" action="dashbord.php">
name:<input type="text" name="name"></br>
password:<input type="password" name="pwd"></br>
<input type="submit" name="submit" value="submit">
</form>

<?php
$con=mysqli_connect("localhost","root","","raj");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$pwd=$_POST['pwd'];
	
	$sql="SELECT * FROM `login` WHERE `name`='$name',`pwd`='$pwd'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	$count=mysqli_num_rows($result);
	 
	 if($count>0)
	 {
		 session_start();
		 $_SESSION['name']=$row['name'];
		 $_SESSION['pwd']=$row['pwd'];
		 header("dashbord.php");
	 }
	 else
	 {
		 echo "login invalid";
	 }
}
?>