<?php
session_start();
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'goodbooks') or die("DB Error"); // Select DB from database

	if(isset($_POST["Upload"]))
	{
        $bname=mysqli_real_escape_string($conn,$_POST['bname']);
         $aname=mysqli_real_escape_string($conn,$_POST['aname']);
          $edition=mysqli_real_escape_string($conn,$_POST['edition']);
           $sem=mysqli_real_escape_string($conn,$_POST['sem']);
            $cost=mysqli_real_escape_string($conn,$_POST['cost']);
			
		$target_dir = "img_gb/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$target_file_tmp = $_FILES["fileToUpload"]["tmp_name"];
		move_uploaded_file($target_file_tmp, $target_file);
  
  $s=1;

   $id=$_SESSION['id'];
 $sql = "INSERT INTO book(Name,author,Semester,Edition,Cost,book_img,U_id,book_status) VALUES('$bname','$aname','$sem','$edition','$cost','$target_file','$id','$s')";
 
 $result = mysqli_query($conn, $sql);
 if($result){
 header("location:home.php");
 }
 else
 {
 echo "Failure!";
 }
}
?>