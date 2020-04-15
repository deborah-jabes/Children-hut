<html>
	<head>
  		<title>Test PHP</title>
 	</head>
 	<body>
 		<?php
 			$exist = false;
 			if ($exist == false){ //check data base
 				if ($_POST["password"] == $_POST["confirm_password"]) {
 					createAccount();
 					echo "Account created <br>";
 					header('Location: http://childrenshut/');
 				}else{
 					echo "Passwords must be the same <br>";
 				}
 			}else{
 				echo "An account already exists with this Email Address <br>";
 			}

 			function createAccount(){
 				echo "Sans Database c'est compliqué mais t'inquiète <br>";
 				session_start();
 				$_SESSION["EmailAddress"] = $_POST["login"];
 				$_SESSION["FName"] = $_POST["FName"];
 				$_SESSION["Surname"] = $_POST["Surname"];
 			}
 		?>
 	</body>
</html>