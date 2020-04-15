<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			$exist = true;
			if ($exist == true) { //check database
				echo "Login Successful";
				successfulLogin();
			}else{
				echo "Wrong password";
			}

			function successfulLogin(){ //start session
				session_start();

			}
		?>
	</body>
</html>