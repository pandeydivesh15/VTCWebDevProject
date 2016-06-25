<?php 
	include 'createConnection.php';
	
	echo "Connection Established<br>";
	
	$sqlQuery="CREATE TABLE items
				( id int NOT NULL PRIMARY KEY,
				  price char(10) NOT NULL,
				  cart int); ";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "items table created<br>";

	$sqlQuery="CREATE TABLE persons(
					Id INT UNIQUE AUTO_INCREMENT,
					Name varchar(30) NOT NULL ,
					Email char(20) NOT NULL PRIMARY KEY,
					Password char(40) NOT NULL,
					Contact char(15) NOT NULL  UNIQUE,
					City varchar(20) NOT NULL,
					Address varchar(400) NOT NULL);";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "persons table created<br>";

	$sqlQuery="CREATE TABLE contact(
					Id INT NOT NULL UNIQUE AUTO_INCREMENT,
					Name varchar(30) NOT NULL,
					Email char(20) NOT NULL PRIMARY KEY,
					Message varchar(500) NOT NULL);";
	mysqli_query($conn,$sqlQuery) or die("Error creating table".mysqli_error($conn));
	echo "contact table created<br>";
	mysqli_close($conn);
	echo "Connection Closed";
?>