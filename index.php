<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <?php
  session_start();

//fetch_data.php


$conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'goodbooks') or die("DB Error");
    #$h=$_GET['r'];
    $h = ($_GET['r']) ? $_GET['r'] : 1;

#$s=[]''
$sqlc="SELECT * FROM book WHERE Book_id='$h'";
$resultc=mysqli_query($conn,$sqlc);
$row=mysqli_fetch_array($resultc);
$str=$row['book_img'];
list($s,$image)=array_pad(explode("/",$str),2,null);
$a=$row['U_id'];

  $sqlb="SELECT * FROM user WHERE U_id='$a'";
  $resultb = mysqli_query($conn,$sqlb);
 $row1 = mysqli_fetch_array($resultb);
    ?>


    <main class="container">
         <div class="left-column">
        <img src="img_gb/<?php echo $image;?>" class="img-responsive" >
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
                   <h1><?php echo $row['Name'];?></h1>
          <p>Author: <?php echo $row['Author'];?></p>

           <p>Edition: <?php echo $row['Edition'];?></p>
            <p>Semester: <?php echo $row['Semester'];?></p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">


          <div class="product-color">
            <span>Seller Details</span>

            <div class="color-choose">
               <h1>Name: <?php echo $row1['Name'];?></h1>
               <p>Contact: <?php echo $row1['Contact'];?></p>

            </div>

          </div>


        <div class="product-price">
          <span>₹<?php echo $row['Cost'];?></span>
          <a href="#" class="cart-btn">Buy</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
   <!--  <script src="script.js" charset="utf-8"></script> -->
  </body>
</html>
