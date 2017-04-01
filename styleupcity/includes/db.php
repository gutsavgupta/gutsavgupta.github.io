<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "Myshop";

	// Create connection
	$conn = mysqli_connect("localhost","root","root","Myshop");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	    echo "Connection failed";
	}
?>