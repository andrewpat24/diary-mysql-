<?php

	$link = mysqli_connect("localhost", "cl11-example-ow8", "e4!Cn-2D4", "cl11-example-ow8");
	
		

	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";
	
	if($result=mysqli_query($link, $query)){
		$row = mysqli_fetch_array($result); 
		print_r($row); 
		
	}else{
		echo "failed";
	}
	
	

?>