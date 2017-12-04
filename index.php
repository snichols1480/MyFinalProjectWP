<?php
include('menu.php');

// Create and include a configuration file with the database connection
include('Myconfig.php');

// Include functions for application
include('functions.php');

// Call the newly defined get function to find to get the search term

$term = get('search-term');

$WingFlavors = searchWingFlavors($term, $database);

//Include errors



// Get a list of flavors from the database


?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
	
  	<title>Street Wingz</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">
	

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
		
		
			<h1 style = color:blue;font-size:100px> Street Wingz  </h1> 
				<img src = "Images/3a.jpg">
			<h2 style = color:blue > Hi, my name is Chelsey and "Street Wings" is my foodtruck. 
			I am located in Lexington Kentucky.  I have several wing flavors.</h2>
			
		<form method="GET">
			<input type="text" name="search-term" placeholder="Search Flavor..." />
			<input type="submit" />
		</form>
		
			<?php foreach ($WingFlavors as $WingFlavor) : ?>
        <p> Flavor available: <?php echo $WingFlavor['flavor']; ?> <br />
		</p>
			<?php endforeach; ?>
		<p>
		
			<a href="addOrderForm.php">Order Now</a> <br />
			
			<a href="Customer.php">New Customer<br /> 
			<a href="login.php">Returning Customer<br />
			
		</p>
				
		

</body>
		
<html>
