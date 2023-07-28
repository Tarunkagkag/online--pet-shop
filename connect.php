<?php

	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$ref = $_POST['cvv'];

	// Database connection
	
	$conn = mysqli_connect('localhost','root','','storesss');
	
		$result ="INSERT INTO `payment` (`Full Name`, `Email`, `Referal Number`) VALUES('$fullName','$email','$ref')";



	
		$c = mysqli_query($conn,$result);
			if($c)
			{
				echo "Your Order Is Successfully Done";
			}
			else
			{
				echo "Error in connectivity";
			}
	
	?>