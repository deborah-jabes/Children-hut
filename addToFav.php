<?php
	include("db_connection.php");
	session_start();

	if (isset($_SESSION["Email_address"])) {
		$hut = intval($_POST['Hut_id']);
		$user = $_SESSION["User_id"];

		$result = $db->prepare('SELECT * FROM favorites WHERE User_id = :user AND Hut_id = :hut;');
		$result->execute(array('user'=>$user,'hut'=>$hut));

		if ($result->rowCount() == 0) {
			$result = $db->prepare('INSERT INTO favorites(User_id, Hut_id) VALUES (:user, :hut)');
			$result->execute(array(
				'user'=>$user,
				'hut'=>$hut
			));
		}
	}else{
		echo "<script>window.top.location.href = \"login.php\";</script>";
	}
?>