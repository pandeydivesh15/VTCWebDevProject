<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST")  
	{
		session_start();
		require 'createConnection.php';   //Establish connection
		$sql="SELECT Password FROM persons WHERE Email="."'".$_SESSION['email']."'";
		$data=mysqli_query($conn,$sql) or die();
		$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
		if ($_POST['oldPasswd']!=$rowForCheck[0]) 
		{
			$result="Password NOT changed.<br>Incorrect Old Password given.";
		}
		elseif ($_POST['newPasswd']!=$_POST['confirmNewPasswd']) {
			$result="Password NOT changed.<br>New Password doesn't matches Confirm Password field's value.";
		}
		else
		{
			$sql="UPDATE persons SET Password="."'".$_POST['newPasswd']."'"." WHERE Email="."'".$_SESSION['email']."'";
			if (mysqli_query($conn,$sql))
			{
				$result="Password SUCCESSFULLY changed.<br><a href='logoutScript.php'>Click Here to LOG OUT</a>";		
			}
			else
				$result="Password NOT changed due to some internal error";
		}
		header("location:settings.php?result=".$result);
	}
			
		
 ?>