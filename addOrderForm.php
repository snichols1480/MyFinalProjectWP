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
		<form action="addOrder.php" method="POST">
			
			<div class="form-element">
				<label>Wing Flavor:</label>
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Honey BBQ" /><span class="radio-label">Honey BBQ</span>
				<label>Quanity:</label> <input type="number" step="any" name="wing-quanity[]" class="textbox"  /><br />
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Hot & Spicy" /><span class="radio-label">Hot & Spicy</span><label>Quanity:</label>
				<input type="number" step="any" name="wing-quanity[]" class="textbox" /><br />
				<input class="radio" type="checkbox" name="wing-flavor[]" value="Teriyaki" /><span class="radio-label">Teriyaki</span><label>Quanity:</label>
				<input type="number" step="any" name="wing-quanity[]" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Fries ?</label>
				<input class="radio" type="checkbox" name="extra-fries[]" value="Yes" /><span class="radio-label">YES</span>
				
				<input class="radio" type="checkbox" name="extra-fries[]" value="No" /><span class="radio-label">NO</span>
			</div>
			
			<div class="form-element">
				<input type="submit" class="button" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
	</div>
</body>
</html>