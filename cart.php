<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the E-Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 	<style>
		.custom1 .modal-footer{
			background-color: #443c3c;
		}
		.custom3:hover{
			background-color: #E3DEDE;			
		}
		
	</style>
 	
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
	    	    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	    	    
	    	    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> 
	    	     Settings</a></li>
	    	    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
	    	</ul>
	    	</div>
	    </div>
	</nav>
	<br><br><br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-offset-3 col-lg-6">
		<h2 style="text-align: center">YOUR CART</h2>
				<table class="table table-striped">
					<thead class="custom3">
						<th>
							Item Number
						</th>
						<th> Price</th>
					</thead>
				</table>
				<div style="text-align: center;">
				<button class="btn btn-primary"><a style="color:white" href="home.php">Go Back To Home</a></button>	
				</div>
	</div>
	</div>
</body>
</html>
