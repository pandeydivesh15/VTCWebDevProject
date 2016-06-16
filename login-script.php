<?php 
    	
		if($_SERVER["REQUEST_METHOD"]=="POST" AND $_POST['email'])  
		{
			require 'createConnection.php';   //Establish connection
		
			$sql="SELECT Email,Password FROM persons;";
			$data=mysqli_query($conn,$sql) or die();
			$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
			echo "<br>";
			
			while ($rowForCheck) 
			{
				$tempEmail=$rowForCheck[0];
				$tempPwd=$rowForCheck[1];
				if ($tempPwd==$_POST['passwd'] AND $tempEmail==$_POST['email'])
				{
					session_start();
					$_SESSION['email']=$tempEmail;
					$conn->close();
					header('location:home.php');
					return;
				}
				$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);

			}
			header('location:error.php');

			$conn->close();		
		}
?>