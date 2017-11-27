<?php

// Create and include a configuration file with the database connection
//include('Myconfig.php');

include ('menu.php');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Customer</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<h1>Customer:</h1>
		<form action="addCustomer.php" method="POST">
			
			<div class="form-element">
				<label>First Name:</label> <input type="text" step="any" name="customerFName" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Last Name:</label> <input type="text" step="any" name="customerLName" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Customer Phone:</label> <input type="number" step="any" name="customerPhone" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Customer Email:</label> <input type="text" step="any" name="customerEmail" class="textbox" />
			</div>
			
			<div class="form-element">
				<input type="submit" class="button" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
	</div>
</body>
<html>