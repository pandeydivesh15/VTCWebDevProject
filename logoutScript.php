<?php 
	require'beforeUserLoginCheck.php';
	session_start(); 
	session_destroy();
	require 'createConnection.php';
	mysqli_query($conn, "UPDATE `items` SET `cart`=0");
	$conn->close();
	header("location:index.php");
 ?>