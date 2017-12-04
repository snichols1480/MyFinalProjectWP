<?php

// Connecting to the MySQL database
$username = 'nicholss3';
$password = 'f9AfriER';

$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall17_nicholss3', $username, $password);
//Auto-loader
function my_autoloader($class) {
	include 'classes/class.$class.ShoppingCart.php';
}
spl_autoload_register('my_autoloader');

// Start the session
session_start();