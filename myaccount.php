<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link href="assets/main.css" rel="stylesheet" type="text/css">
	<title>My Account</title>
</head>
<body>

	<?php include("header.php");
		include("db_connection.php");
	?>

	<div class="superposition">

		<img class="headimage" src="images/head.jpg" alt="Head image">
		<?php
			session_start();
			if (isset($_SESSION["Email_address"])) {
				$Email_address = $_SESSION["Email_address"];
				$Name = $_SESSION["Name"];
				$Surname = $_SESSION["Surname"];
				$Profile_picture = $_SESSION["Profile_picture"];
				echo "<div class=\"titleAccountInfoPic\">";
				echo "<h2>My Account</h2>";
				echo "<table><tr><td>";
					echo "<img src=".$Profile_picture.">";
				echo "</td><td>";
					echo "<p>".$Name." ".$Surname."</p>";
					echo "<p>".$Email_address."</p>";
					echo "<p> ****** </p>";
				echo "</td></tr></table>";
				echo "</div>";
			}else{
				echo "login first";
				header("Location: login.html");
			}
		?>
	</div>

	<section>
		<?php
			if (isset($_SESSION["Email_address"])) {
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

	<?php include("footer.php"); ?>

</body>
</html>