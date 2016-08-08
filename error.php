<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the E-Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="prop.css" type="text/css"/>
 	
</head>
<body>
	<!--Modal for login-->
	<?php include 'loginModal.php'; ?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container-fluid">
	    	<div class="navbar-header">
	    		<a class="navbar-brand" href="index.php">E-Store</a>
	    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#cNav">
	    			<span class="icon-bar"></span>
	    			<span class="icon-bar"></span>
	    			<span class="icon-bar"></span>
	    		</button>
	    	</div>
	    	<div class="collapse navbar-collapse" id="cNav">
	    	<ul class="nav navbar-nav navbar-right">
	    	    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	    	    <li><a data-toggle="modal" data-target="#logInId"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    	    <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>  
	    	     Contact Us</a></li>
	    	    <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
	    	</ul>
	    	</div>
	    </div>
	</nav>
	<br><br><br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-offset-4 col-lg-4" style="text-align: center">
		<p>Couldn't log you in.<br><?php if (isset($_GET['error'])){ echo "Error:".$_GET['error'];} ?><br><a href="index.php"> Please try again.</a> </p>
	</div>
	</div>
	
</body>
</html>
