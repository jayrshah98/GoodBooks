<?php
session_start();


?>
<!doctype html>
<html>
<head>
<title>User Registration</title>
</head>
<body>
<!-- <h1>User Registration</h1> -->
<!-- <style>
<link rel="stylesheet" href="CSS/main.css" type="text/css">
<?php //include 'CSS/style.css'; ?>
</style> -->
<link rel="stylesheet" href="style3.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css2/fonts/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css2/fonts/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css2/css/util.css">
	<link rel="stylesheet" type="text/css" href="css2/css/register.css">
<!-- <div class="form">
<form action="register_system.php" method="post">
<input type="text" name="name" placeholder="Enter Your Name"><br/><br/>
<input type="text" name="email" placeholder="Enter Your Email"><br/><br/>
<input type="password" name="password" placeholder="Enter Password"><br/><br/> -->
<!-- <input type="submit" value="Register" name="submit"><br/><br/>
 --><!-- <button > Register </button> -->
<!-- Login Link -->
<!-- <a href="login.php">
Already Registered?</a> -->
<!-- <p class = "message">Already Registered? <a href = "login.php">Login</a></p>

</div>
</form> -->
<header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(books-bookstore-book-reading-159711.jpeg);">
					<span class="login100-form-title-1">
						Upload Book
					</span>
				</div>

				<form method="post" action="upload_system.php" class="login100-form validate-form" enctype="multipart/form-data">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Book name is required">
						<span class="label-input100">Book name</span>
						<input class="input100" type="text" name="bname" placeholder="Enter Your book's name">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Author's name is required">
						<span class="label-input100">Author Name</span>
						<input class="input100" type="text" name="aname" placeholder="Enter Author's name">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Edition is required">
						<span class="label-input100">Edition</span>
						<input class="input100" type="number" name="edition" placeholder="Enter the Edition">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Semester is required">
						<span class="label-input100">Semester</span>
						<input class="input100" type="number" name="sem" placeholder="Enter the Semester">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Cost is required">
						<span class="label-input100">Cost</span>
						<input class="input100" type="number" name="cost" placeholder="Enter the Cost">
						<span class="focus-input100"></span>
					</div>





                      <div class="wrap-input100 validate-input m-b-18" >
						<span class="label-input100">Upload image</span>
<!-- 						<input class="input100" type="tel" name="contact" placeholder="Upload Book's image here"> -->
						<span class="focus-input100"></span>
					</div>

					<input type="file" name="fileToUpload" accept="image/*">

					<!-- <input type="submit" > -->
					<div>
						
						<br>
					</div>
                      <div class="container-login100-form-btn">
						<button
						<input class="login100-form-btn mt-4" type="submit" name="Upload">Upload</button>
					</div>



					<!-- <div class="wrap-input100 validate-input m-b-18" data-validate = "password not matching">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="confpass" placeholder="Confirm  Password">
						<span class="focus-input100"></span>
					</div> -->
					
					<!-- <div class="validate-input m-b-26">
						<span class="label-input100">Usertype</span>
						<select name="usertype">
							<option value="student" ><p class="dropdown-format">Student</p></option>
							<option value="faculty"><p class="dropdown-format">Faculty</p></option>
						</select>
					<span class="focus-input100"></span>
					</div> -->
 

					

					<div class="flex-sb-m w-full p-b-30">
						

						<div>
							<!-- <a href="login.php" class="txt1">
								Already have an account? Sign in
							</a> -->
							<!-- <p class = "message">Already Registered? <a href = "login.php">Login</a></p> -->
						</div>
					</div>

					
				</form>
			<!-- </div> -->
		<!-- </div> -->
			</div>
		</div>
	</div>
</header>
<script src="js/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap/popper.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="css2/js/register.js"></script>

</body>
</html>