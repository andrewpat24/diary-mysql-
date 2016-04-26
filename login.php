<?php
	session_start(); 
	
	if($_GET["logout"]==1){
		session_destroy(); 
		$message="Log out successful";
		header("Location:diary.php");
	}
	
	include ("connection.php");
	mysqli_query($link, $query); 
	
	
	if ($_POST['submit']=="Sign Up"){
		if(!$_POST['email'])
			$error.="Please enter your email <br />";
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			$error.="<br /> Please enter a valid email address ";
			
		if(!$_POST['password'])
			$error.="<br /> Please enter your password ";
		else{
				if(strlen($_POST['password'])<8)
					$error.=" Please enter a password with at least 8 characters ";
				
				if(!preg_match('`[A-Z]`', $_POST['password']))
					$error.="<br /> Please include at least one capital letter in password ";
			}	
			
		if($error)
			$error = " There were error(s) in your signup: <br />".$error;
		else{
			
			$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			//ALWAYS use msqli_real_escape_string() when getting input, 
			//or else you set yourself up for sql injection attacks
			$result = mysqli_query($link,$query); 
			$results = mysqli_num_rows($result); 
			if($results)
				$error = "This email is already registered.";
			else{
			
				$query= "INSERT INTO `users`(`email`,`password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link, $query); 
				
				$message = "You've been signed up!";
				
				$_SESSION['id']=mysqli_insert_id($link); 
				print_r($_SESSION); 
				
				// redirect to logged in page
				header("Location:mainpage.php");
				
			}
			
			
			
		}
		
	}
	if ($_POST['submit']=="Log In"){
		
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
	
	
		$result = mysqli_query($link, $query); 
		$row = mysqli_fetch_array($result); 
	
		if($row){
			$_SESSION['id']=$row['id'];
			
			header("Location:mainpage.php");
			
		}else{
			$error = "Your email or password is incorrect, please try again";
		}
	}
	

?>
