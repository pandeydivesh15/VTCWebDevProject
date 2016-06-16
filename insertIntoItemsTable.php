<?php 
	include 'createConnection.php';
	
	echo "Connection Established<br>";
	
	$sqlQuery="INSERT INTO items Values ('1','8999','0'),
		('2','11999','0'),   
		('3','9679','0'),    
		('4','10167','0'),  
		('5','8250','0'),  
		('6','11997','0'); "; 
	mysqli_query($conn,$sqlQuery) or die("Error creating table:".mysqli_error($conn));
	echo "Data inserted into items table<br>";
?>