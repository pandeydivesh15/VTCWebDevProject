<?php 
	session_start(); 
	if(isset($_SESSION['email']));
	else
	{
		session_destroy();
		header("location:index.php");
	}
 ?>	