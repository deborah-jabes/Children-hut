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
	
	<?php 
		include("header.php");
		include("db_connection.php");
		session_start();
	?>
		<section class="space"></section>
		
		<div class="research">  
				<form action="search.php" method="get"> 
					<button  type="submit" class="btn btn-success">
						<i class="fa fa-search fa-1x"></i>
					</button>
					<input type="search" name="keyWords" placeholder="Research"></input>
				</form>
		</div>

		<section class="ads">
			<div class="center flexSection">
				<div>
					<img src="images/ad1.png" alt="hut" class="hidden">
				</div>
				<div>
					<img class="girl" src="images/ad2.jpg" alt="girl in hut">
				</div>
				<div>
					<img  src="images/ad3.png" alt="hut" class="hidden">
				</div>
			</div>
		</section>

		<section class=" flexSection flexColumn">
			<div class="center">
				<h2>Recent Announcements</h2>
			</div>
			<div class="announcements flexSection rowClassified">

				<?php
					$result = $db->query('SELECT * FROM huts ORDER BY Publication_date ASC LIMIT 5;');
					if ($result->rowCount() > 0) {
							echo "<div class=\"adTable\"><table><tr>";
							while ($data = $result->fetch()){
								echo "<td class=\"hut\"><div>";
									echo "<img src=".$data["Pictures_path"].">";
									echo "<header><h4>".$data["Title"]."</h4><button class=\"heart\"><img src=\"images/heart.svg\"></button></header>";
									echo "<p class=\"description\">".$data["Description"]."</p>";
									echo "<footer class=\"flexSection\">";
									echo "<section><p class=\"price\">".$data["Price"]."€</p></section>";
									if($data["toPurchase"] == 1){
										$message = 'Buy';
									}else{
										$message = 'Rent';
									}
									echo '<section><form action="classified_ad.php" method="get"><input type="hidden" value="'.$data["Title"].'"></input><button type="submit">Details</button></form><button><a href="Message.php">'.$message.'</a></button></section>';
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
	
		<section id="ad" class="ad center flexSection">
			<h3>Choose the <br />perfect <br />hut</h3>
			<img src="images/hut.png" alt="hut" class="woodhut" >
			<img src="images/hut2.png" alt="hut" class="woodhutChild hiddenHut">
		</section>

		<section class="seller"> 
			<div class="center">
				<h2>Become a seller</h2>
				<div class="flexSection column">
					<div>
						<img src="images/seller.png" alt="" >
					</div>
					<div class="vertical">
						<center><p><span>Evaluate your hut</span><br />
						<strong>Ask for the price</strong></p>
						<p>Fill in the form to contact one of our real estate agents</p>
						<a class="typeform-share button" href="https://nicolasheudron.typeform.com/to/UmyEoa" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#ABDBFF;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" data-submit-close-delay="5" target="_blank">Form </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script></center>
					</div>
				</div>
			</div>
		</section>

		<section class="team">
			<div class="center">
				<h2>The Team</h2>
			</div>
		</section>

		<section class="partners">
			<h2 class="center">| Partners |</h2>
			<div class="profils">
				<div class="firmin">
					<img src="" alt="">
					<h3>Chataigner 3D printer</h3>
					<p>From father to son for over 20 years.</p>
				</div>
				<div class="deborah">
					<h3>Déborah Jabès</h3>
					<p>A full-stack developer to create the best websites</p>
				</div>
				<div class="nicolas">
					<img src="" alt="">
					<h3>Heudron videographer</h3>
					<p>Fix on the roll your best moments with your children in your hut!</p>
				</div>
			</div>
		</section>	

		<?php include("footer.php"); ?>

	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e82eeddb-4dac-4972-9a28-304a54f8e032";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	<script src="js/scroll.js"></script>
	
	
</body>
</html>