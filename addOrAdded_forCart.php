<?php 
	function message($id){
		require("createConnection.php");
		$sqlQuery = "SELECT cart FROM items WHERE id=".$id;
		$result=mysqli_query($conn, $sqlQuery) or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			if($row['cart'] == 0)
			{
				return "Add to the cart!";
			}
			else
			{
				return "Added! <small>(Click to remove from cart)</small>";
			}
		}
	}
 ?>