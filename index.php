<?php include 'afterUserLoginCheck.php'; ?>
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
	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 1</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/Asus-Zenfone-2-Laser-ZE550KL-SDL121786215-1-72d52.jpg" alt="Image can't be displayed" >
			<p align="center">Asus Zenfone 2 Laser ZE550KL (16GB) Rs. 8999.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 2</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/Mi4i-16GB-SDL137015877-1-55892.jpg" alt="Image can't be displayed" >
			<p align="center">Xiaomi Mi4i (16GB) Rs. 11999.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 3</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/cvsfdlienove-2ba21.jpg" alt="Image can't be displayed" >
			<p align="center">Lenovo Vibe X2 (32GB, White) Rs. 9679.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 4</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/HTC-Desire-626-g--SDL935932578-1-efeb2.jpg" alt="Image can't be displayed" >
			<p align="center">HTC Desire 626 G+ Rs. 10167.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 5</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/Micromax-Canvas-Silver-Q450-SDL173548237-1-0791c.jpg" alt="Image can't be displayed" >
			<p align="center">Micromax Canvas Sliver 5 Q450 16GB Rs. 8250.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-default">
		<div class="panel-heading">Mobile 6</div>
		<div class="panel-body custom2" align="center"><img class="img-responsive" style="max-height: 200px" src="Images/Microsoft-Lumia-640-XL-Dual-SDL257999608-1-b52ac.jpg" alt="Image can't be displayed" >
			<p align="center">Microsoft Lumia 640 XL Dual SIM 8GB Rs. 11997.</p>
			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#logInId">Order Now!</button>
		</div>
		</div>
	</div>
	</div>
	</div>
	
	<footer class="footer" style="background-color: #272822;color: white;">
		<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3 >Information</h3>
				<a style="color: white;" href="about.php">About Us</a><br>
				<a style="color: white;" href="contact.php">Contact Us</a><br>
				
			</div>
			<div class="col-lg-4">
				<h3>My Account</h3>
				<a style="color: white;" data-toggle="modal" data-target="#logInId">Login</a><br>
				<a style="color: white;" href="signup.php">Sign Up</a><br>
				
			</div>
			<div class="col-lg-4">
				<h3 >Contact Us</h3>
				+91 5678912345
				
			</div>
		</div>

		</div>
		<br><p align="right"><span class="glyphicon glyphicon-copyright-mark"></span><span style="font-size: 80%;"> E-Store</span></p>
	</footer>
</body>
</html>			