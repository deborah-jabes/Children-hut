<?php
//https://www.cloudways.com/blog/connect-mysql-with-php/
	$servername = "localhost";
	$username = "root";
	$password = "123456789";
	$db = "childrenshut";

	$conn = new mysqli_connect($servername, $username, $password, $db);

	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}
	echo "Connection Successfull"
?>