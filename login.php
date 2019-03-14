<!DOCTYPE html>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="css2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css2/fonts/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css2/fonts/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css2/css/util.css">
	<link rel="stylesheet" type="text/css" href="css2/css/register.css">
</head>
<body>
	
	
		
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(165878.jpg);">
					<span class="login100-form-title-1">
						Log In
					</span>
				</div>

				
					<form method="post" action="login_system (1).php" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email ID is required">
						<span class="label-input100">Email ID</span>
						<!-- <input type="text" id="txtEmail-id" name="email" placeholder="Email-id" required > -->
						<input class="input100" type="email" name="email" placeholder="Enter Email ID"> 
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<!-- <input name="password" type="password" placeholder="Password"/> -->
												<input class="input100" type="password" name="password" placeholder="Enter Password">
						<span class="focus-input100"></span>
					</div>
					
 

					

					<div class="flex-sb-m w-full p-b-30">
						

						<div>
							
	<p class = "message">Not a Goodbooker? <a href = "register.php">Register</a></p>					
		</div>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="signup" value="Sign Up">
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

		
		
		
		
	
	

	



	<script>
		$('.message a').click(function(){
		$('form').animate({height: "toggle", opacity:"toggle"},"slow");	
		});
		</script>
	
<script>
var myInput = document.getElementById("psw");
var length = document.getElementById("length");



// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
	if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<h2 id='result'></h2>
<script>
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  var $result = $("#result");
  var email = $("#email").val();
  $result.text("");

  if (validateEmail(email)) {
    $result.text(email + " is valid :)");
    $result.css("color", "green");
  } else {
    $result.text(email + " is not valid :(");
    $result.css("color", "red");
  }
  return false;
}

$("#validate").bind("click", validate);


</script>
<script src="css2/js/jquery/jquery-3.2.1.min.js"></script>
	<script src="css2/js/bootstrap/popper.js"></script>
	<script src="css2/js/bootstrap/bootstrap.min.js"></script>
	<script src="css2/js/register.js"></script>

</body>
</html>	