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
				<p>allis lorem, nec varius neque ligula et dolor. </p>
			</div>
		</div>
	</div>

	<div class="description">
		DESCRIPTION
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
	</div>

</div>

</div>';

echo '</main></body>'; 
