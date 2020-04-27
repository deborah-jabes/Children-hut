<?php
function headerFunc ($titre) {
	echo '<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/currentStyle.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>' . $titre . '</title>
	</head>
	<body>';
}

headerFunc ('Message');
include("header.php");	
$emailValue = $_POST['mail'];

echo '

	<img class="headimage" src="images/head.jpg" alt="Head image">
	<div class="valuesMessage" id="valuesMessage">

			<div class="valuesToEnter">
				<form id="formulaireMessage" action="mailto:'.$emailValue.'" onsubmit="replaceAndCreate(); return false" method="post">
				<h2>MESSAGE</h2>
				<input type="text" id="name" name="name" required placeholder="Name"></br></br>
				<input type="text" id="mailAdr" name="mail" required placeholder="e-mail address"></br></br>
				<select id="Objects" name="object" onclick="disable()" required> 
					<option id="clickToSelect" >Click to select</option>
					<option value="buy">Buy a hut </option>
					<option value="rent">Rent a hut </option>
					<option value="details">Ask for details </option>
					<option value="other">Other</option>
				</select></br></br>
			

		<textarea id="message" name="msg" placeholder="Your message here" rows="10" cols="70" maxlength="1000" required></textarea></br></br>
		<input type="submit" value="submit" name="submit" id="submit"><br><br>
		 </form></div>

		 <script src="js/messageJS.js"></script>';
		 
		include ("footer.php");

		echo '</body>;'; 
?>
