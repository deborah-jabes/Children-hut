<?php include ('header.php');
include ('usefulFunctions.php');

headerFunc ('Classified Ad');
session_start();
$hutsName = "ImmaNumber1";
//

echo '
<img class="headimage" src="images/head.jpg" alt="Head image">
<div class="container">
	<h2 id="hutsName">HUT '. $hutsName.'</h2>

<div class="flexContainer">
	<div class="imgAndSpecsContainer">
		<div class="imgAndSpecs">
			<img id="hutImg" src="images/huts/hut1.png" alt="image of a hut">
			<p>allis lorem, nec varius neque ligula et dolor. </p>
		</div>
	</div>

	<div class="description">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
	</div>

</div>

</div>';
