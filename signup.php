<html>
	<head>
  		<title>Test PHP</title>
 	</head>
 	<body>
 		<?php
 		include 'db_connection.php';
 			$exist = false;
 			if ($exist == false){ //check data base
 				if ($_POST["password"] == $_POST["confirm_password"]) {

 					$targetDir = "images/profils/";
 					$targetFile = $targetDir.microtime(true).".jpg";
 					$fullFile = explode(".", $_FILES["fileToUpload"]["name"]);
 					$imageFileType = strtolower(end($fullFile));
 					$uploadOK = 1;
 					if (isset($_POST["submit"])) {
 						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 						if ($check !== false) {
 							echo "All good";
 							$uploadOK = 1;
 						}else{
 							echo "File is not an image.";
 							$uploadOK = 0;
 						}
 					}
 					if (file_exists($targetFile)){
 						echo "File already exists <br>";
 						$uploadOK = 0;
 					}
 					if ($_FILES["fileToUpload"]["size"]>2000000) {
 						echo "File too large";
 						$uploadOK = 0;
 					}
 					if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 						echo "Only jpg, png and jpeg supported";
 						$uploadOK = 0;
 					}
 					if($uploadOK == 1){
 						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
 							echo "All good <br>";
 						}else{
 							echo "File not uploaded <br>";
 						}
 					}else{
 						echo "Your file wasn't uploaded";
 					}

 					createSession();
 					echo "Account created <br>";
 				}else{
 					echo "Passwords must be the same <br>";
 				}
 			}else{
 				echo "An account already exists with this Email Address <br>";
 			}

 			function createSession(){
 				global $targetFile;
 				
 				session_start();
 				$_SESSION["EmailAddress"] = $_POST["login"];
 				$_SESSION["FName"] = $_POST["FName"];
 				$_SESSION["Surname"] = $_POST["Surname"];
 				$_SESSION["ProfilPhoto"] = $targetFile;
 			}
 		?>
 	</body>
</html>