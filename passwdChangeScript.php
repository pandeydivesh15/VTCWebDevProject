<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST")  
	{
		session_start();
		require 'createConnection.php';   //Establish connection
		$sql="SELECT Password FROM persons WHERE Email="."'".$_SESSION['email']."'";
		$data=mysqli_query($conn,$sql) or die();
		$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
		if (md5($_POST['oldPasswd'])!=$rowForCheck[0]) //Checks against md5() hashed value 
		{
			$result="Password NOT changed.<br>Incorrect Old Password given.";
		}
		elseif ($_POST['newPasswd']!=$_POST['confirmNewPasswd']) {
			$result="Password NOT changed.<br>New Password doesn't matches Confirm Password field's value.";
		}
		elseif (strip_tags($_POST['newPasswd'])!=$_POST['newPasswd']) {
			$result="Password NOT changed.<br>Make sure that you dont insert HTML/PHP tags in your new password.";
		}
		else
		{
			$tempPwd=md5(strip_tags(mysqli_real_escape_string($conn,$_POST['newPasswd'])));
			$sql="UPDATE persons SET Password="."'".$tempPwd."'"." WHERE Email="."'".$_SESSION['email']."'";
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