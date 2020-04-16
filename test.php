<?php
	include 'db_connection.php';
	$result = $db->prepare('INSERT INTO user(Name, Surname, Password, Email_address, Profile_picture) VALUES (:Name,:Surname,:Password,:Email_address,:Profile_picture)');
 	$result->execute(array(
 		'Name'=>'Firmin',
 		'Surname'=>'Chataigner',
 		'Password'=>'12345678',
 		'Email_address'=>'firmin.chataigner@gmail.com',
 		'Profil_picture'=>'targetFile'
 	));
?>