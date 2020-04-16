<?php
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees
	$servername = "localhost";
	$username = "root";
	$password = "123456789";
	$dbname = "childrenshut";

	try {
		$db = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8',$username,$password);
	} catch (Exception $e) {
		die('Error : '.$e->getMessage());
	}
	//read from bdd
	/*$result = $db->query('SELECT * FROM users');
	while ($data = $result->fetch()) {
		echo "users name : ".$data["first_name"].' '.$data["last_name"].'<br>';
		echo "Email : ".$data["email"];
	}
	$result->closeCursor();*/

	//write to bdd
?>