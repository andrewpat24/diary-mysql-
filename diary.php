<? 
session_start();
include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The secret scratchpad</title>

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
    	
    }
    
    
    /*JUMBOTRON*/
    
    .jumbotron{
    	
    	background-image:url("http://www.publicdomainpictures.net/pictures/90000/nahled/spiral-notebook-red-clipart.jpg");
    	height:100%;
    	/* background-size:cover; */
    	background-repeat:no-repeat; 
    	background-position:center;
    	background-size:50%; 
    	text-align:center;
    	background-color:white;
    }
    
    .jumbotron .header{
    	padding-left:20px;
    	padding-top:90px;
    	color: black;
    	
    }
    
    .jumbotron .header button{
    	padding-top:10px;
    }
    
    .jumbotron input{
    	width:275px;
    }
    
    /*MODAL*/
    
    label{
    	padding-top:5px;
    	margin-left:40px;
    	color:black;
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
  			
  			<div class="navbar-header">
  				<a href="#" class="navbar-brand">Your Scratchpad</a>
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
  				if($message){
  					echo '<div class="alert alert-success">'.addslashes($message).'</div>';
  				}
  				
  			?>
  		</div>
  		
  			<div class="header">
  				<form class="form-horizontal form-group-vertical" method="post">
  						<div class="form-group">
  							
    						<input type="email" name="loginemail" id="loginemail" placeholder="email"value="<?php echo addslashes($_POST['email']); ?>"/>
							
    					</div>
    					<div class="form-group">
    						<input type="password" name="loginpassword" id="loginpassword" placeholder="password" value="<?php echo addslashes($_POST['password']); ?>" />
    					</div>
    					<button class="btn btn-default btn-danger" type="submit" name="submit" value="Log In">Login</button>
    					<button class="btn btn-default btn-danger" data-toggle="modal" 
  				data-target="#myModal">Make a Scratch</button>
    				</form>
  				
  				
  			</div>
  		
  		</div>
  	</div>
  	
  	<div class="modal" id="myModal">
  			<div class="modal-dialog">
  				<div class="modal-content">
  					
  					<div class="modal-header">
  				
  						<button class="close" data-dismiss="modal">x</button>
  						<h4 class="modal-title">Registration form</h4>
  						
  					</div>
  					
  					
  					<form method="post" class="form-horizontal"> <!-- class="form-inline" makes the form inline -->
    					<div class="modal-body">
    						<div class="form-group">
    							<label for="username">Email</label>
    							<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
    			
    							<label for="password" >Password</label>
    							<input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" />
    							
    						</div>
    					</div>
    					<div class="modal-footer">
    						<button class="btn btn-danger" type="submit" name="submit" value="Sign Up">Sign Up</button>
    					</div>
    				</form>
  						
  				
  					
  					<!-- 
<div class="modal-footer">
  					
  						<button class="btn btn-default" data-dismiss="modal">Close</button>
  						<!~~ <button class="btn btn-danger" type="submit" name="submit" value="Sign Up">Sign Up</button> ~~>
  						
  					</div>
 -->
  				
  				</div>
  			
  			</div>
  		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<!-- 

<form method="post">
	
	<!~~ use addslashes() method so user input doesn't cause issues with html  ~~>
	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Sign Up"/>
</form>

<form method="post">
	
	<!~~ use addslashes() method so user input doesn't cause issues with html  ~~>
	<input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Log In"/>
</form>
 -->