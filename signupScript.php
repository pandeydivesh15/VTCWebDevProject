<?php 
	//Establish connection
	
	if($_SERVER["REQUEST_METHOD"]=="POST" AND $_POST['userName'])
	{
		require 'createConnection.php';
	
		$sql="INSERT INTO persons(Name,Email,Password,Contact,City,Address) Values('".$_POST['userName']."','".$_POST['userEmail']."','".$_POST['userPasswd']."','".$_POST['userContact']."','".$_POST['userCity']."','".$_POST['userAddress']."');";
		if (mysqli_query($conn,$sql)) {
			$message="We have successfully signed you up! Go to <a href='index.php'>Login</a>";

		}
		else
		{
			$message="There was a problem while signing you up:<br><a href='signup.php'>Try again</a><br>Error reported was:<br>".mysqli_error($conn);
		}	
		$conn->close();		
	}	

 ?>
 <?php 

		if(isset($message))
		{
			require "signupResult.php";
		}

 ?>