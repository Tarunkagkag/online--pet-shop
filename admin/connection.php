<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "storesss";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=storesss",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?> 
<!-- <?php
// $servername="localhost";
// $username="root";
// $password="";
// $database="storesss";

// $conn=mysqli_connect($servername,$username,$password,$database);
?> -->