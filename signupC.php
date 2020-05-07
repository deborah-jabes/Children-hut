<?php
	include 'db_connection.php';
	$result = $db->prepare('SELECT Email_address FROM user WHERE Email_address = ?');
	$result->execute(array($_POST["Email_address"]));
	$targetDir = "images/profils/";
	if ($result->rowCount() == 0){ //check data base
		$result->closeCursor();
		if ($_POST["Password"] == $_POST["confirm_password"]) {
			if (is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
				$targetFile = $targetDir.microtime(true).".png";
				$fullFile = explode(".", $_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(end($fullFile));
				$uploadOK = 1;
				if (isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if ($check !== false) {
						echo "All good<br>";
						$uploadOK = 1;
					}else{
						echo "File is not an image.<br>";
						$uploadOK = 0;
					}
				}
				if (file_exists($targetFile)){
					echo "File already exists <br>";
					$uploadOK = 0;
				}
				if ($_FILES["fileToUpload"]["size"]>5000000) {
					echo "File too large<br>";
					$uploadOK = 0;
				}
				if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
					echo "Only jpg, png and jpeg supported<br>";
					$uploadOK = 0;
				}
				if($uploadOK == 1){
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
						echo "All good <br>";
						createAccount();
					}else{
						echo "File not uploaded <br>";
					}
				}else{
					echo "Your file wasn't uploaded<br>";
					header("Location: signup.php");
				}
			}else{
				$targetFile = $targetDir."DefaultAccount.png";
				createAccount();
			}
		}else{
			echo "Passwords must be the same <br>";
			header("Location: signup.php");
		}
	}else{
		echo "An account already exists with this Email Address <br>";
		header("Location: login.php");
	}

	$result->closeCursor();

	function createAccount(){
		global $targetFile;
		global $db;
		$result = $db->prepare('INSERT INTO user(Name, Surname, Password, Email_address, Profile_picture) VALUES (:Name,:Surname,:Password,:Email_address,:Profile_picture)');
		$result->execute(array(
			'Name'=>$_POST["Name"],
			'Surname'=>$_POST["Surname"],
			'Password'=>$_POST["Password"],
			'Email_address'=>$_POST["Email_address"],
			'Profile_picture'=>$targetFile
		));
		session_start();

		$_SESSION["EmailAddress"] = $_POST["Email_address"];
		$_SESSION["Name"] = $_POST["Name"];
		$_SESSION["Surname"] = $_POST["Surname"];
		$_SESSION["Profile_picture"] = $targetFile;
		echo "Account created <br>";
		$result = $db->prepare('SELECT * FROM user WHERE Email_address = ?');
 		$result->execute(array($_POST["Email_address"]));
 		$data = $result->fetch();
		$_SESSION["User_id"] = $data["User_id"];
		header("Location: myaccount.php");
	}
?>