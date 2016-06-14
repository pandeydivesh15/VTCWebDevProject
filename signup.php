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
				<form role="form" action="" method="post">
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
						<input class="form-control custom3" name="userAddress" required="True" placeholder="Address"> 
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>	
				<?php 
					//Establish connection
					
					if($_SERVER["REQUEST_METHOD"]=="POST")
					{
						require 'createConnection.php';
					
						$sql="INSERT INTO persons(Name,Email,Password,Contact,City,Address) Values('".$_POST['userName']."','".$_POST['userEmail']."','".$_POST['userPasswd']."','".$_POST['userContact']."','".$_POST['userCity']."','".$_POST['userAddress']."');";
						if (mysqli_query($conn,$sql)) {
							$message="We have successfully signed you up!";

						}
						else
						{
							$message="There was a problem while signing you up:<br>".mysqli_error($conn);
						}	
						$conn->close();		
					}	

				 ?>
				 <?php 
				
						if(isset($message))
						{
						echo "<div align='center'>".$message."</div>";
						}

				 ?>
				

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
	<?php include 'loginModal.php'; ?>
</body>
</html>			