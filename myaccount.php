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

				//manque requete db

				/*echo "<div class=\"favorites\">";
				echo "Fav huts<br>";
				$result = $db->query('');
				while ($data = $result->fetch()){
					echo "<div class=\"hut\">";
					//huts info
					echo "</div>";
				}
				echo "</div>";

				echo "<div class=\"personnalHuts\">";
				echo "My Huts<br>";
				$result = $db->query('');
				while ($data = $result->fetch()){
					echo "<div class=\"hut\">";
					//huts info
					echo "</div>";
				}
				echo "</div>";*/
			}else{
				echo "login first";
				header("Location: login.html");
			}
		?>

	</section>

</body>
</html>