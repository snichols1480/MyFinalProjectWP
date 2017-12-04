<?php

function searchWingFlavors($term, $database) {
	// Get list of flavors
	$term = '%'.$term.'%';
	$sql = file_get_contents('sql/getWingFlavors.sql');
	$params = array (
		'term' => $term
		);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$WingFlavors = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $WingFlavors;
}

function get($key) {
	if(isset($_GET[$key]))
		return $_GET[$key];
	else
		return '';
}