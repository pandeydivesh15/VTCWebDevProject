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
	<!--Main body-->
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h2 style="font-weight: bold">LIVE SUPPORT</h2>
				<h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>

				<p align="justify">This is a demo information. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
				</p>
	
			</div>
			<div class="col-lg-2">
				<div align="center"><img src="Images/contact.png" alt="Image can't be displayed" class="img-responsive"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8" style="margin-bottom: 20px">
				<h2 style="font-weight: bold">CONTACT US</h2>
				<form role="form" action="contactScript.php" method="post">
					<div class="form-group">
						<label>Name:</label>
						<input class="form-control custom3" type="text" name="personName" required="True">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control custom3" type="email" name="personEmail" required="True">
					</div>
					<div class="form-group">
						<label>Message:</label>
						<textarea class="form-control custom3" type="textarea" rows="3" name="pMessage" required="True" placeholder="Submit your query here."></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-lg-4">
				<h2 style="font-weight: bold">COMPANY INFORMATION</h2>

				
				<address><i>
					500 Lorem Ipsum Dolor Sit,<br>

					22-56-2-9 Sit Amet, Lorem,<br>

					USA<br>
				</i></address> 
				<span style="color:#03ACF3">Phone:</span>(00) 222 666 444<br><br>

				<span style="color:#03ACF3">Fax:</span> (000) 000 00 00 0<br><br>

				<span style="color:#03ACF3">Email:</span> info@mycompany.com<br><br>

				<span style="color:#03ACF3">Follow on:</span> Facebook, Twitter<br><br>

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