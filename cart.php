<?php include 'beforeUserLoginCheck.php'; ?>
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
	<div class="col-lg-offset-3 col-lg-6">
		<h2 style="text-align: center">YOUR CART</h2>
				<table class="table table-striped">
					<thead class="custom3">
						<th>
							Item Number
						</th>
						<th> Price</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							require 'createConnection.php';
							$sum=0;
							$sqlQuery = "SELECT `id`, `price` FROM `items` WHERE `cart`=1";
							$result=mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								$sum+= $row["price"];
								$id = $row["id"].", ";
								echo "<tr><td>"."#".$row["id"]."</td><td>".$row['price']."</td><td><a href='remove.php?
								id={$row['id']}' style='float: right;'>Remove</a></td></tr>";
							}
							if ($sum != 0) {
								echo "<tr ><td>Total:</td><td>".$sum."</td><td><a href='success.php?sum={$sum}' class='btn btn-primary btn-sm' style='float: right;'> Confirm your order!</a></td></tr>";
							}
							
						?>
					</tbody>
				</table>
				<div style="text-align: center;">
				<a href="home.php"><button class="btn btn-primary btn-lg">Go Back To Home</button></a>
				</div>
	</div>
	</div>
</body>
</html>
