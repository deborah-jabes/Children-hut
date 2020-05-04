<?php 
include ('header.php');
include ('usefulFunctions.php');
include ('db_connection.php');

headerFunc ('Classified Ad');
$hutsName = "ImmaNumber1";

$result = $db->prepare('SELECT * FROM huts WHERE Title = ?');
			// that is to modify later, so that the title is taken when the user clicks on a classified ad /!\
	$result->execute(array('House for kids')); 
while ($data = $result->fetch()) {

	echo '
	<img class="headimage" src="images/head.jpg" alt="Head image">
	<div class="container">
		<h2 id="hutsName">HUT '. $data["Title"] .'</h2>

	<div class="flexContainer">
		<div class="imgAndSpecsContainer">
			<div class="imgAndSpecs">
				<img id="hutImg" src="'.$data["Pictures_path"].'" alt="image of a hut">

				<div class="specs">
					<a href="Message.php"><button id="buyOrRent">BUY</button></a>
					<p>SPECIFICATIONS</p>
					<ul class="descriptionContent">
						<li>Element1</li>
						<li>Element2</li>
						<li>Element3</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="description">
			<p>DESCRIPTION</p>
			<p class="descriptionContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br>
			<p>THE SELLER</p>
			<p class="descriptionContent"><a href="login.php">Log in</a> to see more information</p>
		</div>

	</div>

	</div>';
}

echo '</main></body>'; 


$result->closeCursor();