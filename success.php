<?php include 'beforeUserLoginCheck.php'; ?>
<?php 
	if (!$_GET['sum']) {
		die("Inappropriate Request!");
	}
	require("createConnection.php");
	$sqlQuery = "SELECT `id` FROM items WHERE `cart`=1";
	$result=mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));
	if ($result) {
		$tempArray=array();
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$tempArray[]=$row['id'];
		}	

		$message="<h2 style='margin-bottom: 25px';>THANK YOU FOR SHOPPING<span class='glyphicon glyphicon-thumbs-up'></span></h2>
		<p>Thank you for ordering from E-Store. The order shall be delivered to you shortly.</p>   
		<p>To order more items, <a href='home.php'>click here.</a> </p>";
		$userMessage="Thank You for ordering. Your items will be dispatched very soon.\nYour total Cost is {$_GET['sum']}.";
		$sqlQuery = "SELECT Name FROM persons WHERE Email='".$_SESSION['email']."'";
		$result=mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$ownerMessage="Details about the user:	".$row['Name']."\nEmail:	{$_SESSION['email']}\nTotal Cost:	{$_GET['sum']}\nOrdered Items: 	";
		$cnt=count($tempArray);
		for ($i=0; $i < $cnt; $i++)
		{ 
			$ownerMessage=$ownerMessage." #".$tempArray[$i]." ";
		}
		$headers = "From: webmaster@etore.com";
		mail($_SESSION['email'], "Order Confirmation", $userMessage,$headers);
		mail("diveshpandey15@gmail.com", "New Order Confirmation", $ownerMessage,$headers);

		mysqli_query($conn, "UPDATE `items` SET `cart`=0");
		$conn->close();	

	}
	else
	{
		$message="<h4>There were no items in your cart.</h4>";		
	}
 ?>
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
	<div class="col-lg-offset-4 col-lg-4" style="text-align: center">
		<?php echo $message; ?>
	</div>
	</div>
</body>
</html>