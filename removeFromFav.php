<?php
	include("db_connection.php");
	session_start();

	if (isset($_SESSION["Email_address"])) {
		$hut = intval($_POST['Hut_id']);
		$user = $_SESSION["User_id"];
		$result = $db->prepare('DELETE FROM favorites WHERE User_id = :user AND Hut_id = :hut;');
		$result->execute(array(
			'user'=>$user,
			'hut'=>$hut
		));
		echo "<script>window.top.location.href = \"myaccount.php\";</script>";
	}else{
		echo "<script>window.top.location.href = \"login.php\";</script>";
	}
?>