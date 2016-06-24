<?php 
	//Establish connection
	
	if($_SERVER["REQUEST_METHOD"]=="POST" AND $_POST['userName'])
	{
		require 'createConnection.php';
		$sql="SELECT Email FROM persons;";
		$data=mysqli_query($conn,$sql) or die();
		$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
		
		while ($rowForCheck) 		//Email Validation	
		{
			$tempEmail=$rowForCheck[0];
			if ($tempEmail==$_POST['userEmail'])
			{
				$error="The Email address you entered is already registered. Try again";  
				break;
			}
			$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);

		}
		$emailCheckRegex="/^[a-z][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";
		if (!preg_match($emailCheckRegex, $_POST['userEmail'])) //Checks Email Pattern
		{
			$error="Please enter a valid Email Address.";
		}
		$contactCheckRegex= "/^[789][0-9]{9}$/";
		if (!preg_match($contactCheckRegex, $_POST['userContact'])) //Checks Mobile Number's Pattern
		{
			$error="Please enter a valid Mobile Number.";
		}

		if (!isset($error)) {
			$sql="INSERT INTO persons(Name,Email,Password,Contact,City,Address) Values('".$_POST['userName']."','".$_POST['userEmail']."','".$_POST['userPasswd']."','".$_POST['userContact']."','".$_POST['userCity']."','".$_POST['userAddress']."');";

			if (mysqli_query($conn,$sql)) {
				$message="We have successfully signed you up! Go to <a href='index.php'>Login</a>";

			}
			else
			{
				
				$error="There was a problem while signing you up:<br><a href='signup.php'>Try again</a><br>Error reported was:<br>".mysqli_error($conn);
			}	
		}
		
		$conn->close();		
	}	

 ?>
 <?php 

		if(isset($message))
		{
			require "signupResult.php";
		}
		else //then an error exists
		{
			require "signup.php";
		}

 ?>