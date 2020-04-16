<?php
include 'db_connection.php';

$result = $db->prepare('SELECT * FROM users WHERE id = ? OR first_name = ?');
$result->execute(array(1,'Michel'));

while ($data = $result->fetch()) {
		echo "users name : ".$data["first_name"].' '.$data["last_name"].'<br>';
		echo "Email : ".$data["email"].'<br><br>';
	}
	$result->closeCursor();

?>