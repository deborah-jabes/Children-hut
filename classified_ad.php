
<head>
	<link rel="icon" href="images/favicon.png" />
</head>
<?php 
include ('header.php');
include ('usefulFunctions.php');
include ('db_connection.php');

headerFunc ('Classified Ad');

$titles = $db->prepare('SELECT * FROM huts WHERE Title = ?');


if ($_GET["Title"] != null) {
	$titles->execute(array($_GET["Title"])); 
}
else {

	echo '<h1 style="text-align: center">Error</h1>';
}


//SPECIFICATIONS
function getSpecifications() {

include ('db_connection.php');

$columnName = $db->prepare('SELECT * from huts where Hut_id = ?');
$columnName->execute(array($_GET["Hut_id"]));

	foreach ($columnName->fetch(PDO::FETCH_ASSOC) as $key => $value) {
		
		

		switch (true) {
			case $key == 'Author_id' || $key == 'Description' || $key == 'Hut_id' || $key == 'Pictures_path':
				echo '';
				break;

			case $key == 'Surface_area':
				echo '<li><b>' . str_replace('_', ' ', $key) . '</b> : '. $value . ' m²</li>';
				break;

			case $key == 'Price':
				echo '<li><b>' . str_replace('_', ' ', $key) . '</b> : '. $value . ' €</li>';
				break;

			case $key == "Ceiling_height":
				echo '<li><b>' . str_replace('_', ' ', $key) . '</b> : '. $value . ' m</li>';
				break;

			case $value == '0':
				echo '<li class="contentWithCross"><b>' . str_replace('_', ' ', $key) . '</b> : '. 'No' . '</li>'; 
				break;

			case $value == '1':
				echo '<li><b>' . str_replace('_', ' ', $key) . '</b> : '. 'Yes' . '</li>';
				break;

			default: 
				echo '<li><b>' . str_replace('_', ' ', $key) . '</b> : '. $value . '</li>';
				break;
		}
		
	}
}




while ($data = $titles->fetch()) {

	// setting the button value, depending on whether the hut is to rent or to buy
	if ($data["toRent"] == 1) {
		$rentOrBuy = 'RENT';
	}
	else {
		$rentOrBuy = 'BUY';
	}



	echo '
	<img class="headimage" src="images/head.jpg" alt="Head image">
	<div class="container">
		<h2 id="hutsName">HUT '. $data["Title"] .'</h2>
		<div id="country">
		<img id="img_localisation" src="/images/localisation.png" alt="localisation_img"></img>
		<a>'.$data["Town"].'<a>
		</div>

	<div class="flexContainer">
		<div class="imgAndSpecsContainer">
			<div class="imgAndSpecs">
				<div class="mySlides fade">
					<img id="hutImg" src="'.$data["Pictures_path"].'/1.png" alt="image of a hut">
				</div>';
				if (file_exists($data["Pictures_path"] . '/2.png')) {
					echo '
					<div class="mySlides fade">
						<img id="hutImg" src="'.$data["Pictures_path"].'/2.png" alt="image of a hut2">
					</div>

					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span> 
					  <span class="dot" onclick="currentSlide(2)"></span> 
					</div>
					<script src="classified_ad.js"></script>';
				}
				
				echo '<div class="specs">
					<a href="Message.php"><button id="buyOrRent">'.$rentOrBuy.'</button></a>
					<p>SPECIFICATIONS</p>
					<ul class="descriptionContent">';

					echo getSpecifications();
					echo '</ul>
				</div>
			</div>
		</div>

		<div class="description">
			<p>DESCRIPTION</p>
			<p class="descriptionContent">'. $data["Description"] .'</p><br>
			<p>THE SELLER</p>
			<p class="descriptionContent"><a href="login.php">Log in</a> to see more information</p>
		</div>

	</div>

	</div>';
}

echo '</main></body>'; 


$titles->closeCursor();