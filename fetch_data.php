

<?php

//fetch_data.php

 // $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 // $db = mysqli_select_db($conn, 'goodbooks') or die("DB Error"); // Select DB from database
include('database_connection.php');


if(isset($_POST["action"]))
{
	$query = "

		SELECT * FROM book WHERE book_status = '1'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND Cost BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["sem"]))
	{
		$sem_filter = implode("','", $_POST["sem"]);
		$query .= "
		 AND Semester IN('".$sem_filter."')
		";
	}
	if(isset($_POST["edition"]))
	{
		$edition_filter = implode("','", $_POST["edition"]);
		$query .= "
		 AND Edition IN('".$edition_filter."')
		";
	}
	if(isset($_POST["author"]))
	{
		$author_filter = implode("','", $_POST["author"]);
		$query .= "
		 AND Author IN('".$author_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';


	if($total_row > 0)
	{
		foreach($result as $row)
		{
			
                     $str=$row['book_img'];
                   
                     list($s,$image)=explode("/",$str);
                    $id=$row['Book_id'];
                    
						$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
				
					 <img src="img_gb/'.$image.'"  class="img-responsive" >
					 <p align="center"><strong><a href="index.php?r='.$id.'">'. $row['Name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['Cost'] .'</h4>
					<p>
					Edition : '. $row['Edition'] .' <br />
					Semester: '. $row['Semester'] .' <br />
					Author : '. $row['Author'] .'  <br />
                      

					
<!--                      -->
					 </p>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}
 //<a  href="cart.php">
?>
<!-- </html> -->