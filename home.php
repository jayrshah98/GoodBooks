<?php

session_start();
?>
<html>
<head>
    <title>GoodBooks</title>
   

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <link href="style2.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css2/css/font-awesome.min.css">
    <link rel="stylesheet" href="css2/css/bootstrap.css">  
    <link rel="stylesheet" href="css2/css/main.css">
</head> 
<body>
    
        
    <!-- <div class="row"> -->
       <!--  <div class="logo">
     GoodBooks
        
        </div> -->
        
       <!--  <div class="name">
           
        </div> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<body>
      <div class="wrapper">
      

                  <!-- nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                               GoodBooks
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#">Home</a></li> -->
                                    <!-- <li><a href="#">About</a></li> -->
     <!--                                <li><a href="#">Catalog</a></li>
                                    <li><a href="#">Contact</a></li>
                              <a href="login.php" class="button button-blue button-bordered">
    <span class="button--inner">SignUp</span>
</a> 

                              </ul>

                        </div>
                  </nav> -->

            <style type="text/css">
    input[type=text] {
            width: 180px;
            height: 35px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            padding: 12px 20px 12px 30px;
            background-image: url('img/search-icon.png');
            background-position: 5px 0px; 
            background-repeat: no-repeat;
            transition: width 0.4s ease-in-out;
    }
        input[type=email]{
            height: 32px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 13px;
            padding: 2px;
            padding-left: 5px;
        }
        input[type=password]{
            height: 32px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 13px;
            padding: 2px;
            padding-left: 5px;
        }
      input[type=text]:focus {
         width: 60%;
   $brand-color: #2299ff;
$input-height: 34px;
$border-radius: 3px;
$border-color: #999;
$transition: 250ms all ease-in-out;

*,
*:before,
*:after {
  box-sizing: border-box;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
/*
body,
html {
  width: 100%;
  height: 100%;
}*/

.expanding-search-form {
  position: relative;
  top: 40%;
  left: 35%;
  display: inline-block;
  height: $input-height;
  width: all;

  .search-label {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 1px solid $border-color;
    z-index: 2;
    cursor: pointer;
    border-radius: $border-radius;
    transition: $transition;
  }
  
  .search-input {
    position: relative;
    top: 0;
    display: inline-block;
    height: $input-height;
    width: 450px;
    float: left;
    border: 0;
    font-size: 16px;
    z-index: 2;
    box-shadow: none;
    border-radius: 0;
    transition: $transition;

    &:focus {
      width: 300px;
      outline: none;

      + .search-label {
        border-color: $brand-color;
      }
    }
  }
  
  .button {
    position: relative;
    top: 0;
    display: inline-block;
    float: left;
    padding: 0 10px;
    color: #fff;
    border: 1px solid transparent;
    background-color: $brand-color;
    text-align: center;
    transition: $transition;
    
    &:hover {
      background-color: darken($brand-color, 10%);
    }
  }

  .search-dropdown {
    position: relative;
    top: 0;
    display: inline-block;
    float: left;
    padding: 3px;

    &.open .dropdown-menu {
      display: block;
    }
  }

  .dropdown-toggle {
    height: $input-height - 6px;
    font-size: 20px;
    line-height: $input-height - 6px;
    border-radius: $border-radius - 1px;
    z-index: 3;
  }

  .dropdown-menu {
    position: absolute;
    top: calc(100% - 1px);
    display: none;
    margin: 0;
    padding: 5px;
    list-style: none;
    background-color: #fff;
    border: 1px solid $border-color;
    border-bottom-right-radius: $border-radius;
    border-bottom-left-radius: $border-radius;
    z-index: 3;
    transition: $transition;

    > li > a {
      display: block;
      padding: 4px 12px;
      color: $brand-color;
      font-size: 14px;
      line-height: 20px;
      text-decoration: none;
      border-radius: $border-radius - 1;
      transition: $transition;

      &:hover {
        color: #fff;
        background-color: $brand-color;
      }
    }

    > .menu-active {
      display: none;
    }
  }
 .col-s12 h3
{
color:#fff;
font-size:72px;
font-weight:700;
line-height:1em;
margin-top:20px;
padding:2px 0px;
margin-bottom:20px;}
  .section-search input
  {
    padding:5px !important;
    font-size: 18px !important;
    width:90% !important;
    border:#f4f4f4 3px solid !important;
}
  .search-button {
    height: $input-height;
    z-index: 3;
    border-top-right-radius: $border-radius;
    border-bottom-right-radius: $border-radius;

    .icon {
      font-size: 50px;
    }
  }
}

    }
      </style>

  </head>
  <body>  
          
    <div id="header" id="home">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                  
<!-- <form class="expanding-search-form">
</form> -->

            <!--       <div>
                <input type="text" name="search" placeholder="Search Courses">&nbsp &nbsp
                <a class="btn btn-default squire" style="border-color:#D1AB7F; height:35px;" href="searchedcourses.php">Search</a>
              </div>  -->                         
          </div> 
                
                  <!-- <div class="search-dropdown">
    <button class="button dropdown-toggle" type="button">
      <span class="toggle-active">All</span>
      <span class="ion-arrow-down-b"></span>
    </button>
    <ul class="dropdown-menu">
      <li class="menu-active"><a href="#">All/a></li>
      <li><a href="#">Author</a></li>
      <li><a href="#">Semster</a></li>
      <li><a href="#">Branch</a></li>
    </ul>
  </div>
  <input class="search-input" id="global-search" type="search" placeholder="Search">
  <label class="search-label" for="global-search">
        <span class="sr-only">Global Search</span>
    </label>
  <button class="button search-button" type="button">
        <span class="icon ion-search">
            <span class="sr-only">Search</span>
        </span>
    </button> -->

<!-- <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
              <form method="post" action="home.php">

                <input type="email" placeholder="Enter email-id" name="email" required>&nbsp &nbsp
                <input type="password" placeholder="Enter password" name="password" required>&nbsp 
                                <button class="btn btn-default" type=submit" name="signin" >Sign In</button>
                <a class="btn btn-default" href="register.php">Register</a>
                 <a class="btn btn-default" href="login.php">Sign In</a>

               </div> -->


<?php 
                if(isset($_SESSION['name']))
                {
                echo
                '<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
              <form method="post" action="home.php">
               <a class="btn btn-default" href="logout.php">Logout</a>
               <a class="btn btn-default" href="upload.php">Upload</a>
                </div>';

                }

                else
                {
                   echo
                '<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">   
              <form method="post" action="home.php">
                <a class="btn btn-default" href="register.php">Register</a>
                 <a class="btn btn-default" href="login.php">Sign In</a>

               </div>';

                }
?>


















<  <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
              <form method="post" action="home.php">
                <?php 
                if(isset($_SESSION['name']))
                {
                echo 
                "<p><font color=blue font face='arial' size='5pt'>Hi {$_SESSION['name']}</font></p>";
                }
                ?> 
              

            </form>
<!--                 <section id="search" class="section section-search white-text center scrollspy">
    <div class="container">
        <div class="row">
        <div class="col-s12">
            <h3>
                Search Books
            </h3>
            <div class="input-field">
<input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Kumbojkar, TCS, Physics,Software Engg,etc...">
            </div>
        </div>
        </div>
        </div>
    </div>

</section>    --> 
                </div> 
              </div>                  
            </div>
        </div>
       </div> 


           <!--  <section  class= "banner-area relative" id="home"> -->
        <!--//original banner 
        <div class="overlay overlay-bg"></div>
        <div class="container"><br>
          <div class="row fullscreen d-flex justify-content-center align-items-center">
            <div class="banner-content col-lg-10 col-md-12 justify-content-center"><br><br>
              <h1>
                BrainFirst      
              </h1>
              <h6 class="text-uppercase">A revolution in learning, the evolution of you.</h6><br>
              <a href="register.php" class="primary-btn squire text-uppercase mt-10">Get Started</a>
            </div>                      
          </div>
        </div>-->
              <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox"> -->
          <!-- Slide One - Set the background image for this slide in the line below -->
          <!-- <div class="carousel-item active" style="background-image: url('libros.jpg')"> -->
            <!--<div class="carousel-caption d-none d-md-block"
              <h1>BrainFirst</h1>
              <p>A revolution in learning, the evolution of you.</p>
            </div>--><!-- <br><br><br><br><br><br><br><br><br>
            <div class="banner-content col-lg-02 col-md-02 justify-content-center"><br><br>
              <h1>
                GoodBooks      
              </h1>
            
              <h6 class="text-uppercase">Where the Bookstore comes to You.</h6><br>
              <a href="register.php" class="primary-btn squire text-uppercase mt-10"> &nbsp Get Started &nbsp </a>
            </div>                      
          </div> -->
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <!-- <div class="carousel-item" style="background-image: url('')">
            <div class="carousel-caption d-none d-md-block justify-content-center">
              <h1 class="banner content h1">Quality Assurance</h1>
              <p>Quality assured by our memebers</p>
            </div>
          </div>
           --><!-- Slide Three - Set the background image for this slide in the line below -->
          <!-- <div class="carousel-item" style="background-image: url('')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="banner content h1" >Learning made simple</h1>
              <p>All university students welcomed </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </section>-->
      
            <section  class= "banner-area relative" id="home">
        <!-- //original banner 
        <div class="overlay overlay-bg"></div>
        <div class="container"><br>
          <div class="row fullscreen d-flex justify-content-center align-items-center">
            <div class="banner-content col-lg-10 col-md-12 justify-content-center"><br><br>
              <h1>
                BrainFirst      
              </h1>
              <h6 class="text-uppercase">A revolution in learning, the evolution of you.</h6><br>
              <a href="register.php" class="primary-btn squire text-uppercase mt-10">Get Started</a>
            </div>                      
          </div>
        </div>--> 
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('165878.jpg')">
            <!--<div class="carousel-caption d-none d-md-block"
              <h1>BrainFirst</h1>
              <p>A revolution in learning, the evolution of you.</p>
            </div>--><br><br><br><br><br><br><br><br><br>
            <div class="banner-content col-lg-02 col-md-02 justify-content-center"><br><br>
              <h1>
                GoodBooks      
              </h1>
            
              <h6 class="text-uppercase">Where the bookstore comes to you.</h6><br>
              <a href="register.php" class="primary-btn squire text-uppercase mt-10"> &nbsp Get Started &nbsp </a>
            </div>                      
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('wallpaper2you_240207.jpg')">
            <div class="carousel-caption d-none d-md-block justify-content-center">
              <h1 class="banner content h1">Quality Assured And Verified</h1>
              <p>Quality assuerd by our team</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('law-4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="banner content h1" >Cheaper Price</h1>
              <p>Books are comparatively cheaper and sold at the best price </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </section>


      <section class="item-category-area section-gap">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-80 header-text text-center">
              <h1 class="pb-10">Books Available</h1>
            </div>
          </div>                
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="single-cat-item">
                <div class="thumb">
                  <img class="img-fluid" src="img_gb/gv_kumbhojkar_applied_mathematics_1.jpg" alt="">
                </div>  
                <h4>G.V.Kumbojkar</h4></a>
                <p>
                 Applied Mathematics Kumbojkar is for Semster 4th for branches Mechanical Civil Production Auto
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="single-cat-item">
                <div class="thumb">
                  <img class="img-fluid" src="img_gb/SE-edition2-sem6.png" alt="">
                </div>  
                <h4>Software Engineering</h4></a>
                <p>
                  Software Engineering edition 2 Semster 6 for Computer Engineering Students
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="single-cat-item">
                <div class="thumb">
                  <img class="img-fluid" src="img_gb/Applied-physics-1-edition2015.jpg" alt="">
                </div>  
                <h4>Applied Physics I</h4></a>
                <p>
                  Applied Physics I is common for all branches for First Year students
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="single-cat-item">
                <div class="thumb">
                  <img class="img-fluid" src="img_gb/Theoretical-Computer-Science.jpg" alt="">
                </div>  
                <h4>Theory of Computer Science</h4></a>
                <p>
                  TCS first edition is for Computer Branch for Semster 5
                </p>
              </div>
            </div>                                    
            <!-- <a class="primary-btn mx-auto mt-80" href="#">View All Books</a> -->
          <!-- <a href="register.php" class="primary-btn squire text-uppercase mt-10"> &nbsp View Books &nbsp </a> -->
          <div class="button">
        <a href="ixpf.php" class="btn btn-one"> View  All Books</a>
        <!-- <a href="" class="btn btn-two"> Explore More</a>  -->   
    </div>  
          </div>
        </div>  
      </section>


    <!-- <ul class="main-nav">    
        <li class="active"><a href=""> HOME </a></li>
        <li class="menu"><a href=""> CATALOG </a></li>
        <li><a href=""> CART</a></li>
        <li><a href=""> ABOUT </a></li>
        <li><a href=""> CONTACT </a></li>
        <li><a href=""> SIGN IN </a></li> 
    </ul>     -->
        
    <!-- </div> -->
        
    <!--     <style>
body {
  margin: 0;
  background-color: #f1f1f1;
}

#navbar {
  background-color: #333;
  position: fixed;
  top: -50px;
  width: 100%;
  display: block;
  transition: top 0.3s;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
  text-transform: uppercase;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style> -->
</head>
<body>

<!-- <div id="navbar">
  <a href="#home">Home</a>
  <a href="#cart">Cart</a>
  <a href="#catalog">Catalog</a>
  <a href="#about">About</a>
  <a href="Contact">Contact</a> -->





 
<!--  </div> -->
 




<!-- <div style="padding:15px 15px 2500px;font-size:30px">
    <div class="hero">
    <h1>Where the bookstore comes to you</h1>
        
    <div class="button">
        <a href="" class="btn btn-one"> View Books</a>
        <a href="" class="btn btn-two"> Explore More</a>    
    </div>    
            
    </div>
 -->   

<!-- <script type="text/javascript">
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}

</script> -->
<script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
    <script type="text/javascript">
      $('.dropdown-toggle').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).closest('.search-dropdown').toggleClass('open');
});

$('.dropdown-menu > li > a').click(function(e) {
  e.preventDefault();
  var clicked = $(this);
  clicked.closest('.dropdown-menu').find('.menu-active').removeClass('menu-active');
  clicked.parent('li').addClass('menu-active');
  clicked.closest('.search-dropdown').find('.toggle-active').html(clicked.html());
});

$(document).click(function() {
  $('.search-dropdown.open').removeClass('open');
});
    </script>

<!-- Footer -->
<!--<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
 <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
</footer>
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}



.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

</style>-->
<!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>About Us</h6>
                <p>
                 GoodBooks is a platform that allows the buyer and seller to interact without intervention of middle man and do the transaction.Second Hand Books are tough to find nowadays GoodBooks makes it easy for you to find the books at any time at any place.
                </p>              
              </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>Contact Us</h6>
                <p>For any query</p>
                <div class="" id="mc_embed_signup">
                    <input class="form-control" name="QUERY" placeholder="Your Query" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Query'" required="" type="text"><br>
                                    <button class="click-btn" style="border-radius: 4px; color:white;"><i class="lnr lnr-arrow-right" aria-hidden="true"><a style="color: white;" href="mailto:contact@GoodBooks.com">Submit</a></i></button>
                    <div class="info"></div>
                </div>
              </div>
            </div>  
            <div class="col-lg-12">
              <p class="footer-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>               
            </div>            
          </div>
        </div>
      </footer> 
      <!-- End footer Area -->  

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})

	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script src="css2/js/main.js"></script>
</body>    
</html>
