<?php
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees
	$servername = "mysql-locagarden.alwaysdata.net";
	$username = "204501_root";
	$password = "Loc@Garden1404";
	$dbname = "locagarden_bdd";

	try {
		$db = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8',$username,$password);
	} catch (Exception $e) {
		die('Error : '.$e->getMessage());
	}
	
	//read from bdd
	/*$result = $db->prepare('SELECT * FROM user WHERE id = ? OR first_name = ?');
	$result->execute(array(1,'Firmin'));
	//$result = $db->query('SELECT * FROM users WHERE id = 1 OR first_name = \'Firmin\''); do not prevent sql injection
	while ($data = $result->fetch()) {
		echo "users name : ".$data["first_name"].' '.$data["last_name"].'<br>';
		echo "Email : ".$data["email"];
	}
	$result->closeCursor();*/

	//write to bdd
	/*$Name = 'Michel';
	$Surname = 'Dupond';
	$Email_address = 'michel.dupond@gmail.com';
	$Password = '123456789';
	$Profil_picture = 'images/profils/DefaultAccount.png';

	$result = $db->prepare('INSERT INTO user(Name, Surname, Password, Email_address, Profil_picture) VALUES (:Name,:Surname,:Password,:Email_address,:Profil_picture)');
	$result->execute(array(
	 	'Name'=>$_POST["FName"],
	 	'Surname'=>$_POST["Surname"],
	 	'Password'=>$_POST["password"],
	 	'Email_address'=>$_POST["login"],
	 	'Profil_picture'=>$targetFile
	));*/

	//ne pas oublier $result->closeCursor(); à la fin d'une recherche.

	/* creation bdd
	create table User(
	    User_id int primary key AUTO_INCREMENT,
	    Name varchar(20),
	    Surname Varchar(20),
	    Password varchar(8),
	    Email_address varchar(50),
	    Profile_picture varchar(100))engine=INNODB;
	*/
?>