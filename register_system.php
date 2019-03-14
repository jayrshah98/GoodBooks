<?php

 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'goodbooks') or die("DB Error"); // Select DB from database
echo "hi";
if(isset($_POST["Register"])){
	echo $_POST['name'].','.$_POST['email'].','.$_POST['password'].','.$_POST['contact'];
 if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['contact']) ){
 $name = $_POST['name'];
 $email = $_POST['email'];
  $password = $_POST['password'];
  $contact = $_POST['contact'];

 //Selecting Database
 //$query = mysqli_query($conn, "SELECT * FROM user_table WHERE name='$name'");
 ///$numrows = mysqli_num_rows($query);
 //if($numrows ==0)
 //{
	$sqlc="SELECT name FROM user WHERE name='$name'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
 //Insert to Mysqli Query
 $sql = "INSERT INTO user(name,email,password,contact) VALUES('$name','$email','$password','$contact')";
 
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){

 	$s="SELECT * FROM user WHERE email='$email'";
	 $r=mysqli_query($conn,$s);
	 $row=mysqli_fetch_array($r);
	 	 $_SESSION['name']=$row[0];
 echo "Your Account Created Successfully";
 header("location:home.php");
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
 }
 }
 else
 {
	 /*
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 */
 }
}
?>