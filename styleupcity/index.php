<!-- php script -->
<?php
	include("includes/db.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<!-- webpage descrition-->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keyword" content="StyleUp, StyleUp Jabalpur, Jabalpur online fashion, Men's clothing, Women's Clothing"/>

	<!-- styling -->
	<link rel="stylesheet" href="css/bootstrap.css"  type="text/css" media="all"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all"/>
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
	
	<!-- javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script> 
	

	<title>StyleUpCity</title> 
</head>

<body>
	<!-- Main Container -->
	<div class="main_wrapper">

		<div class="header_wrapper">
			<img src="images/banner2.jpg">
		</div>

		<div class="navbar">
			<ul style="float: left;">
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">Men's Clothing</a></li>
				<li><a href="#">Women's Clothing</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Login</a></li>
				<li><a href="#">Shopping Cart</a></li>
			</ul>
			<ul style="float: right;">
				<li>
					<form action="" method="GET">
						<input type="text" name="query" size="40em" placeholder="Search your product here" style="color: gray;">
						<input type="submit" value="OK" style="color: black;">
					</form>
				</li>
			</ul>
		</div>

		<div class="content_wrapper">
			<div class="left_content">
				<div id="sidebar_title"> Categories </div>

				<ul id="cats">
					<?php

						$get_cats = "select * from categories";
						$run_cats = mysqli_query($conn, $get_cats);

						while ($row_cat = mysqli_fetch_array($run_cats)){
							
							$cat_id = $row_cat['cat_id'];
							$cat_title = $row_cat['cat_title'];

							echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";	
						}
						
					
					?>

				</ul>
				<div id="sidebar_title">Brands</div>
				<ul id="cats">
					<?php

						$get_cats = "select * from brands";
						$run_cats = mysqli_query($conn, $get_cats);

						while ($row_cat = mysqli_fetch_array($run_cats)){
							
							$cat_id = $row_cat['brand_id'];
							$cat_title = $row_cat['brand_title'];

							echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";	
						}
						
					
					?>
				</ul>
			</div>
			<div class="right_content">
				<p> ajshdkajshdlakshdlaksjhdalksjdhaksd</p>
			</div>
		</div>
		
		<div class="footer">
			<h1 style="padding-top:0.2em; text-align: center; font-size: 18px;">&copy; 2017 -By www.StyleupCity.com</h1>
		</div>

	</div>
	<!-- //Main Container -->

</body>
</html>
<?php
	mysqli_close($conn)
?>