<?php

// Create and include a configuration file with the database connection
include('Myconfig.php');

// Include functions for application
include('functions.php');

include ('menu.php');

// Get type of form either add or edit from the URL (ex. form.php?action=add) using the newly written get function
$action = get('action');

// Get the customer ID from the URL if it exists using the newly written get function
$fpcustomersID = get('fpcustomersID');

// Initially set $customer to null;
$customer = null;

// If customer ID is not empty, get customer record into $customer variable
if(!empty($fpcustomersID)) {
	$sql = file_get_contents('sql/getCustomer.sql');
	$params = array(
		'fpcustomersID' => $fpcustomersID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$customers = $statement->fetchAll(PDO::FETCH_ASSOC);

	// Set $customer equal to the first customer in $customers
	$customer = $customers[0];
}

// If form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname = $_POST['customerFName'];
	$lname = $_POST['customerLName'];
	$phone = $_POST['customerPhone'];
	$email = $_POST['customerEmail'];
	$u_name = $_POST['customerUname'];
	$u_pass = $_POST['customerPass'];
	
	
	if($action == 'add') {
		// Insert Customer
		$sql = file_get_contents('sql/insertCustomers.sql');
		$params = array(
			'fpcustomersFName' => $fname,
			'fpcustomersLName' => $lname,
			'fpcustomersPhone' => $phone,
			'fpcustomersEmail' => $email,
			'fpcustomersUName' => $u_name,
			'fpcustomersPassword' => $u_pass
		);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	elseif ($action == 'edit') {
		// Update Customer
		$sql = file_get_contents('sql/updateCustomer.sql');
		$params = array(
			'fpcustomersFName' => $fname,
			'fpcustomersLName' => $lname,
			'fpcustomersPhone' => $phone,
			'fpcustomersEmail' => $email,
			'fpcustomersUName' => $u_name,
			'fpcustomersPassword' => $u_pass
		);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	// Redirect to book listing page
	header('location: index.php');
}
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
		<form action="" method="POST">
			
			<div class="form-element">
				<label>First Name:</label> <input type="text" step="any" name="customerFName" class="textbox"  value="<?php echo $customer['fname'] ?>" />
			</div>
			
			<div class="form-element">
				<label>Last Name:</label> <input type="text" step="any" name="customerLName" class="textbox" value="<?php echo $customer['lname'] ?>" />
			</div>
			
			<div class="form-element">
				<label>Customer Phone:</label> <input type="number" step="any" name="customerPhone" class="textbox2" value="<?php echo $customer['phone'] ?>" /> 
			</div>
			
			<div class="form-element">
				<label>Customer Email:</label> <input type="text" step="any" name="customerEmail" class="textbox" value="<?php echo $customer['email'] ?>" /> 
			</div>
			
			<div class="form-element">
				<label>User Name:</label> <input type="text" step="any" name="customerUname" class="textbox" value="<?php echo $customer['u_name'] ?>" /> 			</div>
			
			<div class="form-element">
				<label>Password:</label> <input type="text" step="any" name="customerPass" class="textbox2"  value="<?php echo $customer['u_pass'] ?>" />
			</div>
			
			<div class="form-element">
				<input type="submit" class="button" value = "Login" />&nbsp;
				<input type="submit" class="button" value = "Register" />&nbsp;
				<input type="reset" class="button" /> &nbsp;
			</div>
		</form>
	</div>
</body>
<html>