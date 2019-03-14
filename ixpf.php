<?php 

//index.php

include('database_connection.php');
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goodbooks</title>

    <script src="jspf/jquery-1.10.2.min.js"></script>
    <script src="jspf/jquery-ui.js"></script>
    <script src="jspf/bootstrap.min.js"></script>
    <link rel="stylesheet" href="csspf/bootstrap.min.css">
    <link href = "csspf/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="csspf/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Books</h2>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="1000" />
                    <p id="price_show">100 - 1000</p>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group">
					<h3>Semester</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(Semester) FROM book WHERE book_status = '1' ORDER BY Semester ASC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector sem" value="<?php echo $row['Semester']; ?>"  > <?php echo $row['Semester']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>Edition</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(Edition) FROM book WHERE book_status = '1' ORDER BY Edition DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector edition" value="<?php echo $row['Edition']; ?>" > <?php echo $row['Edition']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group">
					<h3>Author</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(Author) FROM book WHERE book_status = '1' ORDER BY Author 
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector author" value="<?php echo $row['Author']; ?>"  > <?php echo $row['Author']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var sem = get_filter('sem');
        var edition = get_filter('edition');
        var author = get_filter('author');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, sem:sem, edition:edition, author:author},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:100,
        max:1000,
        values:[100, 1000],
        step:100,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>
