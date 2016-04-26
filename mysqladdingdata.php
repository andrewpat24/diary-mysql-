<?php

	$link = mysqli_connect("localhost", "cl11-example-ow8", "e4!Cn-2D4", "cl11-example-ow8");
	
	
	
	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Andrey','andrewpat24@yahoo.com','pizza')";
	//* is everything
	//this query is to add new members
	
	
	
	//$query="UPDATE `users` SET `email`='ian@hotmail.com' WHERE `id`=2 LIMIT 1";
	//$query="UPDATE `users` SET `email`='andrey@hotmail.com' WHERE `id`=4 LIMIT 1";
	$query="UPDATE `users` SET `email`='andrey@hotmail.com' WHERE `name`='andrey'";
	
	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";
	
	if($result=mysqli_query($link, $query)){
		$row = mysqli_fetch_array($result); 
		print_r($row); 
		
	}else{
		echo "failed";
	}
	
	

?>