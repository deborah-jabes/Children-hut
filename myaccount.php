<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section>
		<?php
		include 'db_connection.php';
			session_start();
			if (isset($_SESSION["Email_address"])) {
				$Email_address = $_SESSION["Email_address"];
				$Name = $_SESSION["Name"];
				$Surname = $_SESSION["Surname"];
				$Profile_picture = $_SESSION["Profile_picture"];
				echo "<div class=\"accountInfo\">";
				echo "<h2>My Account</h2>";
				echo "<img src=".$Profile_picture.">";
				echo "<p>".$Name." ".$Surname."<br>";
				echo $Email_address."<br></p>";
				echo "</div>";

				echo "<div class=\"favorites\">";
				echo "Fav huts<br>";
				echo "</div>";
			}else{
				//header("Location: login.html");
				echo "login first";
				header("Location: login.html");
			}
		?>

	</section>

</body>
</html>