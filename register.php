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
						Sign Up
					</span>
				</div>

				<form method="post" action="register_system.php" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="First Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter Your Name">
						<span class="focus-input100"></span>
					</div>
					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lname" placeholder="Enter Last Name">
						<span class="focus-input100"></span>
					</div> -->
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email ID is required">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="email" name="email" placeholder="Enter Email ID">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter Password">
						<span class="focus-input100"></span>
					</div>

                     <div class="wrap-input100 validate-input m-b-18" data-validate = "Contact No. is required">
						<span class="label-input100">Contact</span>
						<input class="input100" type="tel" name="contact" placeholder="Enter Contact No.">
						<span class="focus-input100"></span>
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
							<p class = "message">Already Registered? <a href = "login.php">Login</a></p>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button
						<input class="login100-form-btn" type="submit" name="Register" value="Submit">Register</button>
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