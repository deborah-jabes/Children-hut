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
	/*$result = $db->prepare('SELECT * FROM users WHERE id = ? OR first_name = ?');
	$result->execute(array(1,'Firmin'));
	//$result = $db->query('SELECT * FROM users WHERE id = 1 OR first_name = \'Firmin\''); do not prevent sql injection
	while ($data = $result->fetch()) {
		echo "users name : ".$data["first_name"].' '.$data["last_name"].'<br>';
		echo "Email : ".$data["email"];
	}
	$result->closeCursor();*/

	//write to bdd
	/*$first_name = 'Michel';
	$last_name = 'Dupond';
	$email = 'michel.dupond@gmail.com';
	$password = '123456789';
	$profil_photo = 'images/profils/DefaultAccount.png';

	$result = $db->prepare('INSERT INTO users(first_name, last_name, email, password, profil_photo) VALUES (:first_name,:last_name,:email,:password,:profil_photo)');
	$result->execute(array(
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'email'=>$email,
		'password'=>$password,
		'profil_photo'=>$profil_photo
	));*/

	//ne pas oublier $result->closeCursor(); à la fin d'une recherche.

?>