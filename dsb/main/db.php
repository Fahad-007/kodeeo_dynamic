<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "dsb";

	$connection = mysqli_connect($host, $user, $pass, $db_name);

	if (!$connection) {
		die("connection failed: " . mysqli_connect_error());
	}
 ?>