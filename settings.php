<?php include 'beforeUserLoginCheck.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the E-Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="prop.css" type="text/css"/>
 	
</head>
<body>
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
	    	    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	    	    
	    	    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> 
	    	     Settings</a></li>
	    	    <li><a href="logoutScript.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
	    	</ul>
	    	</div>
	    </div>
	</nav>
	<br><br><br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-offset-4 col-lg-4">
		<h2 style="text-align: center">CHANGE PASSWORD</h2>
				<form role="form">
					<div class="form-group">
						<input class="form-control custom3" type="password" name="oldPasswd" required="True" placeholder="Old Password">
					</div>
					<div class="form-group">
						<input class="form-control custom3" type="password" name="newPasswd" required="True" placeholder="New Password">
					</div>
					<div class="form-group">
						<input class="form-control custom3" type="password" name="confirmNewPasswd" required="True" placeholder="Confirm Your Password">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Update</button>
				</form>	
	</div>
	</div>
</body>
</html>
