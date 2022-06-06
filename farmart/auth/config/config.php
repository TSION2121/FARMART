<?php
	// Database credentials
	$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="farmart";


	// Attempt to connect to MySQL database
	$mysql_db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}
	date_default_timezone_set('Africa/Nairobi');
	$error="";


	?>