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
<body id="body">
	
	<?php 	include("header.php");
			include("db_connection.php");
			session_start();
	?>
		<section class="space"></section>
		
		<div class="research">  
				<form action=""> 
					<button type="submit" class="btn btn-success">
						<i class="fa fa-search fa-1x"></i>
					</button>
					<input type="search" placeholder="Research"></input>
				</form>
		</div>

		<section class="announcements flexSection flexColumn">
			<div class="center">
				<h2>Recent Announcements</h2>
			</div>
			<div class="flexSection rowClassified">

				<?php
					$result = $db->query('SELECT * FROM huts WHERE toPurchase= \'1\';');
					if ($result->rowCount() > 0) {
							echo "<div class=\"adTable\"><table><tr>";
							while ($data = $result->fetch()){
								echo "<td class=\"hut\"><div>";
									echo "<img src=".$data["Pictures_path"].">";
									echo "<header><h4>".$data["Title"]."</h4><button class=\"heart\"><img src=\"images/heart.svg\"></button></header>";
									echo "<p class=\"description\">".$data["Description"]."</p>";
									echo "<footer class=\"flexSection\">";
									echo "<section><p class=\"price\">".$data["Price"]."€</p></section>";
									echo "<section><button type=\"button\">Details</button><button>Buy</button></section>";
									echo "</footer>";
								echo "</div></td>";
							}
							echo "</tr></table></div>";
						}else{
							echo "<div class=\"dummyAd\">";
							echo "<p class=\"centerV\">No huts published, publish an add to see them here.</p>";
							echo "</div>";
						}
				?>
			</div>
		</section>

		<?php include("footer.php"); ?>

	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e82eeddb-4dac-4972-9a28-304a54f8e032";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>