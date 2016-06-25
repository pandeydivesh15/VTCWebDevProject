<?php 
    	
		if($_SERVER["REQUEST_METHOD"]=="POST" AND $_POST['email'])  
		{
			require 'createConnection.php';   //Establish connection
		
			
			$sql="SELECT Email FROM persons;";
			$data=mysqli_query($conn,$sql) or die();
			$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
			$flag=0;
			while ($rowForCheck) 		//First we see if given Email exists	
			{
				$tempEmail=$rowForCheck[0];
				if ($tempEmail==$_POST['email'])
				{
					$flag=1;  
					break;
				}
				$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);

			}
			if(!$flag)
				$error=" The Email address you entered is <b>not</b> registered. ";
			if (!isset($error)) {
				$sql="SELECT Email,Password FROM persons;";
				$data=mysqli_query($conn,$sql) or die();
				$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
				while ($rowForCheck) 
				{
					$tempEmail=$rowForCheck[0];
					$tempPwd=$rowForCheck[1];
					$tempPwdCheck=md5($_POST['passwd']); //As database stores md5() hashed version of user's password
					if ($tempPwd==$tempPwdCheck AND $tempEmail==$_POST['email'])
					{
						session_start();
						$_SESSION['email']=$tempEmail;
						$conn->close();
						header('location:home.php');
						return;
					}
					$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);

				}
				$error="<b> Entered password is incorrect.<b>";
			}
			header('location:error.php?error='.$error);

			$conn->close();		
		}
?>