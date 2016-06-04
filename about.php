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
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">WHO WE ARE</div>
					<div class="panel-body custom2">
						<div align="center"><img src="Images/about-img.jpg" alt="Image can't be displayed" class="img-responsive"></div><br>
							<p align="justify">E-store is an American electronic commerce company with headquarters in Washington. It is the largest Internet-based retailer in the United States. E- Store started as an online blog, but soon diversified, selling mobile phones. E- Store also sells certain low-end products like USB cables and other accessories. E- Store has separate retail websites for United States, United Kingdom & Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers international shipping to certain other countries for some of its products.</p>
					</div>
				</div>	
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">OUR HISTORY</div>
					<div class="panel-body custom2">
							<div align="justify">
							<h5 style="color: #03ACF3;margin-bottom: 0px;"> 1998:</h5>
							<p>The company was founded in 1998, spurred by what Velos called his "Initiating framework", which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol & Co. and moved to Seattle. He began to work on a business plan for what would eventually become E- Store.</p>
							<h5 style="color: #03ACF3;margin-bottom: 0px;">2002:</h5>
							<p>In January 2002, E- store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.</p>
							<h5 style="color: #03ACF3;margin-bottom: 0px;">2008:</h5>
							<p>In July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.</p>
							<h5 style="color: #03ACF3;margin-bottom: 0px;">2015:</h5>
							<p>E- Store received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors, including Kalaari Capital, Venture Partners, Bessemer Venture Partners all participating.</p>
							</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">OPPORTUNITIES</div>
					<div class="panel-body custom2">
							<div align="justify">
							<h4 >Available Roles</h4>
							
						    1. Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]<br>
						    2. Business Apprentice [6 Months Internship]<br>
						    3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship]<br>
						    
							
							</div>
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
		        <input class="btn btn-primary" type="submit"></input>
		        
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