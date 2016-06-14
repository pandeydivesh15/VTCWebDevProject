<?php 
	$conn=mysqli_connect("localhost","root","a1s2","VTCWebsiteDatabase") or die(mysqli_error($conn));//use your password
	echo "Connection Established<br>";
	
	$sqlQuery="CREATE TABLE items
				( id int NOT NULL PRIMARY KEY,
				  price char(10) NOT NULL,
				  cart int); ";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "items table created<br>";

	$sqlQuery="CREATE TABLE persons(
					Id INT NOT NULL,
					Name varchar(30) NOT NULL,
					Email char(20) NOT NULL PRIMARY KEY,
					Password char(15) NOT NULL,
					Contact char(10) NOT NULL,
					Address varchar(40) NOT NULL,
					City varchar(20) NOT NULL);";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "persons table created<br>";

	$sqlQuery="CREATE TABLE contact(
					Id INT NOT NULL,
					Name varchar(30) NOT NULL,
					Email char(20) NOT NULL PRIMARY KEY,
					Message varchar(300) NOT NULL);";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "contact table created<br>";

?>