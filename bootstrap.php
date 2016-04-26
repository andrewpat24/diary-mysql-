<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
    
    
    .login{
    	float:right; 
    	padding-top:8px;
    }
    
    /*JUMBOTRON*/
    
    .jumbotron{
    	
    	background-image:url(Natasha3.jpg);
    	height:115%;
    	background-size:cover;
    	text-align:center;
    }
    
    .jumbotron .header{
    	padding-top:20px;
    	color: white;
    }
    
    .jumbotron .header button{
    	padding-top:10px;
    }
    
    /*MODAL*/
    
    label{
    	padding-top:5px;
    }
    
    /*ABOUT*/
    
    .about{
    	color:white;
    	height:100vh;
    	background-color:#282B32;
    	position:relative;
    	top:-30px;
    	text-align:center;
    }
    
    .about .content{
    	padding-top:100px;
    }
    
    .about .content span{
    	font-size:400%;
    }
    
    .about .content .row{
    	padding-top:50px;
    }
    
    
    /*DOWNLOAD*/
    
    .download{
    	color:white;
    	height:100vh;
    	background-color:#718c8f;
    	position:relative;
    	top:-50px;
    	text-align:center;
    }
    
    .download .content{
    	padding-top:150px;
    }
    
    
    .download h1{
    	font-size:4em;
    }
    
    .download h3{
    	padding-bottom:20px;
    }
    
    
    .download img{
    	height:100px;
    }
    
    
    /**/
    
    
	
    
    
    
    
    </style>
  </head>
  <body data-spy="scroll" data-target=".collapse">
  	<div class="navbar navbar-inverse navbar-fixed-top"> 
  	<!-- There's also navbar-default, inverse is simply 
  	opposite of the navbar -->
  		<div class="container">
  			
  			<div class="navbar-header">
  				<a href="#" class="navbar-brand">GigManager</a>
  			
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

					<span class="sr-only">Toggle navigation</span>

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<!-- Each "icon-bar" is a bar on the menu icon
					if you delete an icon bar, leaving you with two
					you'll only have two bars on the menu icon.-->
				</button>
  			
  			
  			</div>
  			
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="#home">Home</a></li>
  					<li><a href="#about">About</a></li>
  					<li><a href="#download">Download</a></li>
  				</ul>
  				
  				<div class="login">
  					
  					<form class="form-inline">
  						<div class="form-group">
  						
    						<input type="text" class="form-control" name="username" placeholder="username" />
    						<input type="password" class="form-control" name="password" placeholder="password"/>
    						
    					</div>
    					<button class="btn btn-default btn-danger">Login</button>
    				</form>
  				</div>
  			
  			</div>
  			
  			
  		</div>
  	</div>
  	
  	<div class="jumbotron" id="home">
  		<div class="container">
  			<div class="header">
  				<h1>Planning Made Easy</h1>
  				<h2>Cut the effort in half with our interactive scheduler and planner</h2>
  				<h3>Find new clients easily like never before</h3>
  				<button class="btn btn-default btn-lg btn-danger" data-toggle="modal" 
  				data-target="#myModal">Register Now</button>
  				
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
  					
  					<div class="modal-body">
  					<form > <!-- class="form-inline" makes the form inline -->
    					<div class="form-group">
    		
    						<label for="username">Username</label>
    						<input type="text" class="form-control" name="username"></input>
    			
    						<label for="password">Password</label>
    						<input type="password" class="form-control" name="password"/input>
    			
    						<label for="password">Verify Password</label>
    						<input type="password" class="form-control" name="password"/input>
    			
    			
    						<label for="email">Email</label>
    						<input type="email" class="form-control" name="email"/input>
    		
    					</div>
    				</form>
  						
  					</div>
  					
  					<div class="modal-footer">
  					
  						<button class="btn btn-default" data-dismiss="modal">Close</button>
  						<button class="btn btn-primary">Register</button>
  						
  					</div>
  				
  				</div>
  			
  			</div>
  		</div>
  		
  	<div class="about" id="about">
  		<div class="container">
  			<div class="content">
  				<h1>Stay Connected With Your Clients</h1>
  				<h3>Keeping Clients Updated Has Never Been Easier</h3>
  				<div class="row">
  					<div class="col-md-4">
  						<p><span class="glyphicon glyphicon glyphicon-facetime-video"></p>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
  						Proin et varius elit. Nullam pharetra sollicitudin imperdiet.
  						 Fusce in pretium leo. Sed lacinia ex orci, nec cursus risus tincidunt et. 
  						 Cum sociis natoque </p>
  						
  					</div>
  					
  					<div class="col-md-4">
  						<p><span class="glyphicon glyphicon glyphicon glyphicon-camera"></p>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
  						Proin et varius elit. Nullam pharetra sollicitudin imperdiet.
  						 Fusce in pretium leo. Sed lacinia ex orci, nec cursus risus tincidunt et. 
  						 Cum sociis natoque </p>
  					</div>
  					
  					<div class="col-md-4">
  						<p><span class="glyphicon glyphicon glyphicon glyphicon-bullhorn"></p>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
  						Proin et varius elit. Nullam pharetra sollicitudin imperdiet.
  						 Fusce in pretium leo. Sed lacinia ex orci, nec cursus risus tincidunt et. 
  						 Cum sociis natoque </p>
  					</div>
  				</div>
  			</div>
  			
  		</div>
  	</div>
  	
  	<div class="download" id="download">
  		<div class="container">
  		
  			<div class="content">
  				<h1>Download The App</h1>
  				<h3>Visit us on our App Stores</h3>
  				<a href="#"><img src="googlePlayBadge.png"></a>
  				<a href="#"><img src="App-Store-Icon.png"></a>
  			</div>
  		</div>
  	</div>
  
  
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>