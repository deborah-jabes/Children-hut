<?php
include 'db_connection.php';
	$result = $db->prepare('SELECT * FROM user WHERE Email_address = ?');
	$result->execute(array($_POST["Email_address"]));
	if ($result->rowCount() > 0) { //check database
		$data = $result->fetch();
		if ($_POST["Password"]==$data["Password"]) {
			successfulLogin();
		}else{
			echo "Wrong password<br>";
		}
	}else{
		echo "No account with this Email address<br>";
		header("Location: signup.php");
	}
	$result->closeCursor();

	function successfulLogin(){ //start session
		global $data;
		session_start();
		$_SESSION["User_id"] = $data["User_id"];
		$_SESSION["Email_address"] = $data["Email_address"];
		$_SESSION["Name"] = $data["Name"];
		$_SESSION["Surname"] = $data["Surname"];
		$_SESSION["Profile_picture"] = $data["Profile_picture"];
		header("Location: myaccount.php");
	}
?>