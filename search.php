<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Children's hut</title>
	<link rel="icon" href="images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/10a40eb87c.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--JQuery-->
</head>
<body>	
	<?php 	include("header.php");
			include("db_connection.php");
			$recherche = htmlspecialchars(['keyWords']);
	?>
	<section class="space"></section>
		
		<div class="research">  
				<form method="get"> 
					<button type="submit" class="btn btn-success">
						<i class="fa fa-search fa-1x"></i>
					</button>
					<?php echo '<input type="search" name="keyWords" placeholder="Research" value="'.$recherche.'"></input>'; ?>
				</form>
		</div>
		
		<section class="announcements flexSection flexColumn">
			<div class="center">
				<h2>Results</h2>
			</div>
			<div class="flexSection rowClassified">
			<?php	 
					$result = $db->query('SELECT * FROM huts WHERE  CONCAT(Title, Principal_material, Hut_color, Town, Description) LIKE "%'.$recherche.'%";');
					if ($result->rowCount() > 0) {
						echo "<div class=\"adTable\"><table><tr>";
						while ($data = $result->fetch()){
							echo "<td class=\"hut\"><div>";
								echo "<img src=".$data["Pictures_path"].">";
								echo "<header><h4>".$data["Title"]."</h4><button class=\"heart\"><img src=\"images/heart.svg\"></button></header>";
								echo "<p class=\"description\">".$data["Description"]."</p>";
								echo "<footer class=\"flexSection\">";
								echo "<section><p class=\"price\">".$data["Price"]."€</p></section>";
								echo "<section><button type=\"button\">Details</button><button>Rent</button></section>";
								echo "</footer>";
							echo "</div></td>";
						}
						echo "</tr></table></div>";
					}else{
						echo "<div class=\"dummyAd\">";
						echo "<p class=\"centerV\">No hut matches your criteria. Try with other keywords.</p>";
						echo "</div>";
					}
				?>
			</div>
		</section>
	<?php include("footer.php") ?>
</body>
</html>
