<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studio_db";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Query thai (UTF-8)
	mysqli_set_charset($conn, "utf8");
?>