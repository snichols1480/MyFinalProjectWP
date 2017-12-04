<?php

// Create and include a configuration file with the database connection
include('Myconfig.php');

// Include functions for application
include('functions.php');

// Call the newly defined get function to find to get the search term



include('menu.php');

// Get type of form either add or edit from the URL (ex. form.php?action=add) using the newly written get function
$action = get('action');

// Get the customer ID from the URL if it exists using the newly written get function

// Initially set $customer to null;


// If customer ID is not empty, get customer record into $customer variable

// If form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$wingflavor = $_POST['wing-flavor'];
	$wingquanity = $_POST['wing-quanity'];
	
	
	
	if($action == 'add') {
		// Insert Order
		$sql = file_get_contents('sql/getOrder.sql');
		$params = array(
			'fporderItemsMenu' => $wingflavor,
			'fporderItemsQuanity' => $wingquanity
			);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
		$orderItems = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $orderItems;
	}
	
	elseif ($action == 'edit') {
		// Update Customer
		$sql = file_get_contents('sql/updateOrder.sql');
		$params = array(
			'fporderItemsMenu' => $wing-flavor,
			'fporderItemsQuanity' => $wing-quanity
			);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	// Redirect to book listing page
	header('location: addOrder_Cart.php');
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Add Order</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
	 
				
		<h1>Add Order</h1>
		<form action="" method="POST" >
			
			<div class="form-element">
				<label>Wing Flavor:</label><br />
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Honey BBQ" /><span class="radio-label">Honey BBQ</span>
				<label>Quanity:</label> <input type="number" step="any" name="wing-quanity[]" class="textbox2"  /><br />
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Hot & Spicy" /><span class="radio-label">Hot & Spicy</span><label>Quanity:</label>
				<input type="number" step="any" name="wing-quanity[]" class="textbox2" /><br />
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Teriyaki" /><span class="radio-label">Teriyaki</span><label>Quanity:</label>
				<input type="number" step="any" name="wing-quanity[]" class="textbox2" />
			</div>
			
			<div class="form-element">
				<label>Fries ?</label>
				<input class="radio" type="checkbox" name="extra-fries[]" value="Yes" /><span class="radio-label">YES</span>
				
				<input class="radio" type="checkbox" name="extra-fries[]" value="No" /><span class="radio-label">NO</span>
			</div>
			
			<div class="form-element">
				<input type="submit" class="button" value= "Order Now" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
		<?php foreach ($orderItems as $orderItem) :?>
		<p> Order Number <br /> </p>
		<?php $orderItem('fporderItemsMenu'); ?>
		<?php endforeach; ?>
	</div>
</body>
</html>