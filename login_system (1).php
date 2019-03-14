<?php

session_start();


 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'goodbooks') or die("DB Error"); // Select DB from database

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);


$sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result))
{ 
	 $s="SELECT * FROM user WHERE email='$email'";
	 $r=mysqli_query($conn,$s);
	 $row=mysqli_fetch_array($r);
	 $json= array();
	 $json[]=$row;
	 $j=json_encode($json,true);
	 echo $j;
	 $_SESSION['name']=$row[0];
	 $_SESSION['id']=$row[4];
	 
	header("location:home.php");
	
	echo '<br>';
	
}
else
{
		echo 'Incorrect Username or Password ,Please try again';
}