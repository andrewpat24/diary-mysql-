<?php

	$link = mysqli_connect("localhost", "cl11-example-ow8", "e4!Cn-2D4", "cl11-example-ow8");
	
	
	mysqli_query($link, $query);
	
	//$query = "SELECT * FROM users"; 
	//this is all users
	
	//$query = "SELECT * FROM `users` WHERE `name`='andrey'"; 
	//all users with name andrey
	
	//$query = "SELECT * FROM users WHERE email LIKE '%a%'"; 
	//all users where email contains letter 'a'
	
	//$query = "SELECT * FROM users WHERE name LIKE 'A%'";
	//LIKE is case insensitive, A% is beginning with a, %a ending with %a% anywhere. 
	
	//$query = "SELECT * FROM users WHERE `id`>3"; 
	//selecting all users where id>3
	
	//$query = "SELECT * FROM users WHERE id>3 AND password!=''"; 
	
	//$query = "SELECT `name` FROM `users`";
	
	 $query = "UPDATE `users` SET `name`='Ian O\'Neil' WHERE id=2 LIMIT 1";
	
	// $name="Ian O'Neil";
// 	
// 	$query = "SELECT `name` FROM `users` WHERE name='".mysqli_real_escape_string.($link,$name)."'";
// 	

	$query = "SELECT `name` FROM `users`";
	
	if($result=mysqli_query($link, $query)){
		echo mysqli_num_rows($result); 
	
		while($row=mysqli_fetch_array($result))
			print_r($row); 
			//view -> source and you can see the data more easily
		
	}else{
		echo "failed";
	}
	
	

?>