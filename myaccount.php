<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png" />
	<title>My Account</title>
</head>
<body>

	<?php include("header.php");
		include("db_connection.php");
	?>

	<section class="flexSection flexRow">
		<?php
			if (isset($_SESSION["Email_address"])) {

				$User_id = $_SESSION["User_id"];
				$Email_address = $_SESSION["Email_address"];
				$Name = $_SESSION["Name"];
				$Surname = $_SESSION["Surname"];
				$Profile_picture = $_SESSION["Profile_picture"];
				echo "<div class=\"titleAccountInfoPic\">";
				echo "<h2>My Account</h2>";
				echo "<div class=\"centerH\"><div class=\"imgInfo\">";
					echo "<div class=\"profilP\"><img src=".$Profile_picture."></div>";
				echo "<div class=\"InfoP\">";
					echo "<p>".$Name." ".$Surname."</p>";
					echo "<p>".$Email_address."</p>";
					echo "<p> ****** </p>";
				echo "</div></div></div>";
				echo "</div><br>";
	echo "</section>";

	echo "<section class=\"announcements\">";
				echo "<div class=\"favorites\">";
					echo "<h3>Fav huts</h3>";
					$result = $db->query('SELECT * FROM huts INNER JOIN favorites ON huts.Hut_id = favorites.Hut_id WHERE favorites.User_id = '.$User_id.';');
					if ($result->rowCount() > 0) {
						echo "<div class=\"adTable\"><table><tr>";
						while ($data = $result->fetch()){
							echo "<td class=\"hut\"><div>";
								echo "<img src=".$data["Pictures_path"]."/1.png>";
								echo "<header><h4>".$data["Title"]."</h4><button class=\"heart\"><img src=\"images/heart.svg\"></button></header>";
								echo "<p class=\"description\">".$data["Description"]."</p>";
								echo "<footer class=\"flexSection\">";
								echo "<section><p class=\"price\">".$data["Price"]."€</p></section>";
								echo "<section><button type=\"button\">Buy</button><button>Details</button></section>";
								echo "</footer>";
							echo "</div></td>";
						}
						echo "</tr></table></div>";
					}else{
						echo "<div class=\"dummyAd\">";
						echo "<p class=\"centerV\">No favorites huts yet. Add some to see them here.</p>";
						echo "</div>";
					}
				echo "</div>";
	echo "</section>";

	echo "<section class=\"announcements\">";
				echo "<div class=\"personnalHuts\">";
				echo '<p><h3>My Huts</h3> <center><i>Add a new hut to sell or rent :</i><div class="mini">+</div></p></center>';
				$result = $db->query('SELECT * FROM huts WHERE huts.Author_id = '.$User_id.';');
				if ($result->rowCount() > 0) {
						echo "<div class=\"adTable\"><table><tr>";
						while ($data = $result->fetch()){
							echo "<td class=\"hut\"><div>";
								echo "<img src=".$data["Pictures_path"]."/1.png>";
								echo "<header><h4>".$data["Title"]."</h4><button class=\"heart\"><img src=\"images/heart.svg\"></button></header>";
								echo "<p class=\"description\">".$data["Description"]."</p>";
								echo "<footer class=\"flexSection\">";
								echo "<section><p class=\"price\">".$data["Price"]."€</p></section>";
								echo "<section><button type=\"button\">Details</button><button>Delete</button></section>";
								echo "</footer>";
							echo "</div></td>";
						}
						echo "</tr></table></div>";
					}else{
						echo "<div class=\"dummyAd\">";
						echo "<p class=\"centerV\">No huts published, publish an add to see them here.</p>";
						echo "</div>";
					}
				echo "</div>";
			}else{
				echo "login first";
				header("Location: login.php");
			}
		?>

	</section>
	<div class="addHut">
		<a href="new_classified_ad.php">+</a>
	</div>
	
	<?php include("footer.php"); ?>

</body>
</html>