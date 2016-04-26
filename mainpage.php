<? 

	session_start(); 
	
	include("connection.php"); 
	
	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."'LIMIT 1";
	
	$result = mysqli_query($link, $query); 
	
	$row = mysqli_fetch_array($result); 
	
	$diary=$row['diary'];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Start Writing!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    
    body, html{
    	height:100%; 
    	
    	font-family: “Century Gothic”, CenturyGothic, AppleGothic, sans-serif;
    }
    /*NAVBAR*/
    
    .navbar{
    	border-radius:0;
    	position:fixed;
    	width:100%;
    }
    
    
    
    
    
    /*JUMBOTRON*/
    
    .jumbotron{
    	
    	height:100%;
    	/* background-size:cover; */
    	background-repeat:no-repeat; 
    	background-position:center;
    	background-size:50%; 
    	text-align:center;
    	background-color:#DC514D;
    }
    
    .jumbotron .header{
    	padding-top:40px;
    	color: black;
    	
    }
    
    textarea{
    	resize:none;
    }
    
    
    
    
    
    /* 
#modalBtn{
    	margin-top:10px;
    	margin-left:260px;
    }
 */
    
    
    
    
    /*ERRORS*/
    .errors{
    	position:absolute;
    	top:97px;
    	float:left;
    	width:300px;
    }
   
    
    /**/
    </style>
  </head>
  <body data-spy="scroll" data-target=".collapse">
  	<div class="navbar navbar-default"> 
  	<!-- There's also navbar-default, inverse is simply 
  	opposite of the navbar -->
  		<div class="container">
  			
  			<div class="navbar-header pull-left">
  				<a href="#" class="navbar-brand">Your Scratchpad</a>
  			</div>
  			
  			<div class="pull-right">
  				<ul class="navbar-nav nav ">
  					<li><a href="diary.php?logout=1">Log Out</a></li>
  				</ul>
  			</div>
  			
  			
  			
  			
  		</div>
  	</div>
  	
  	<div class="jumbotron" id="home">
  		<div class="container">
  		<div class="errors">
  			<?php
  				if($error){
  					echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
  				}
  			?>
  		</div>
  		
  			<div class="header">
  				<div class="row">
  					<div class="col-md-6 col-md-offset-3">
  						<textarea class="form-control"><?php echo $diary; ?></textarea>
  					</div>
  				
  				</div>
  				
  			</div>
  		
  		</div>
  	</div>
  	
  	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    
    	$("textarea").css("height",$(window).height()-130);
    	$("textarea").keyup(function() {
    	
    		$.post("updatediary.php", {diary:$("textarea").val()});
    	
    	});
    
    </script>
  </body>
</html>
<!-- 

<form method="post">
	
	<!~~ use addslashes() method so user input doesn't cause issues with html  ~~>
	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Sign Up"/>
</form> ; 

<form method="post">
	
	<!~~ use addslashes() method so user input doesn't cause issues with html  ~~>
	<input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Log In"/>
</form>
 -->