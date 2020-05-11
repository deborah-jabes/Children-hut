<?php
	include("db_connection.php");
	
	$hut = intval($_POST['hut']);
	$user = intval($_POST['user']);
	$result = $db->prepare('INSERT INTO favorites(User_id, Hut_id) VALUES (:user, :hut)');
	$result->execute(array(
		'user'=>$user,
		'hut'=>$hut
	));
?>