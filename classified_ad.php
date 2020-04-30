<?php include ('header.php');
include ('usefulFunctions.php');

headerFunc ('Classified Ad');
$hutsName = "ImmaNumber1";


echo '
<img class="headimage" src="images/head.jpg" alt="Head image">
<div class="container">
	<h2 id="hutsName">HUT '. $hutsName.'</h2>

<div class="flexContainer">
	<div class="imgAndSpecsContainer">
		<div class="imgAndSpecs">
			<img id="hutImg" src="images/huts/hut1.jpg" alt="image of a hut">

			<div class="specs">
				<button id="buy">BUY</button>
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

echo '</main></body>'; 
