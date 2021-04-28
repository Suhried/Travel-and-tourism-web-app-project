<?php
	require_once 'controllers/tour_package_controller.php';

	$key = $_GET["key"]; 
	$products = search_package($key);
	foreach ($products as $package ) 
	{
		echo "<a href='tour_package_booking.php'>".$package["place_name"]."<a><br>";
	}
?>
