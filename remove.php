<?php 
	if ($_GET['id']) {
		require("createConnection.php");
		$sqlQuery = "SELECT cart FROM items WHERE id=".$_GET['id'];
		$result=mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			if($row['cart'] == 1)
			{
				$sqlQuery = "UPDATE `items` SET `cart`=0 WHERE id=".$_GET['id'];
				mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));

			}
			
			
		}
	}
	header("location:cart.php");
 ?>