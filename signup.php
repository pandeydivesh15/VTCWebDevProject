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
	    		<a class="navbar-brand" href="#">E-Store</a>
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
			<div class="col-lg-7" style="margin-bottom: 20px;align-content: center;">
				<img class="img-responsive" src="Images/yess.jpg" alt="Image can't be displayed" >
			</div>
			<div class="col-lg-5">
				<h2 style="font-weight: bold;">Sign Up</h2>
				<form role="form">
					<div class="form-group">
						<input class="form-control custom3" type="text" name="userName" required="True" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input class="form-control custom3" type="text" name="userEmail" required="True" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control custom3" type="password" name="userPasswd" required="True" placeholder="Password">
					</div>
					<div class="form-group" >
						<input class="form-control custom3 " type="text" name="userContact" required="True" placeholder="Contact Number">
					</div>
					<div class="form-group">
						<input class="form-control custom3" type="text" name="userCity" required="True" placeholder="City">
					</div>
					<div class="form-group">
						<textarea class="form-control custom3" rows="3" name="userAddress" required="True" placeholder="Address"></textarea> 
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>	

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


	<!--Modal for login-->
	<div id="logInId" class="modal custom1 fade" role="dialog">
		<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 align="center" class="modal-title"><b style="font:serif;color: rgb(51, 102, 204);">LOGIN</b></h4>
		      </div>
		      <div class="modal-body">
		        <p>Don't have a account. <a href="signup.php">Register</a></p>
		        <form role="form">
		        <div class="form-group">
		        	<input class="form-control" required="True" type="text" name="email" placeholder="Email"></input></div>
		        <div class="form-group">
		        	<input class="form-control" required="True" type="password" name="passwd" placeholder="Password"></input></div>
		        <input class="btn btn-primary" type="submit" value="Login"></input>
		        
		        </form>
		      </div>
		      <div class="modal-footer" id="modalFoot">
		      	<div class="pull-left">
		        <button type="button" class="btn btn-primary btn-sm">Forgot Password</button>
		        </div>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		</div>
	</div>
</body>
</html>			