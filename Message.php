<?php
function headerFunc ($titre) {
	echo '<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="currentStyle.css">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	<title>' . $titre . '</title>
	</head>
	<body>';
}

headerFunc ('Message');
include("header.php");	

echo '
	<img class="headimage" src="images/head.jpg" alt="Head image">
	<div class="valuesMessage" id="valuesMessage">

			<div class="valuesToEnter">
				<form id="formulaireMessage" onsubmit="return replaceAndCreate()">'//that is to choose later on 
				.'<input type="text" id="name" name="name" required placeholder="Name"></br></br>
				<input type="text" id="mailAdr" name="mail" required placeholder="e-mail address"></br></br>
				<select id="Objects" onclick="disable()" required> 
					<option id="clickToSelect" >Click to select</option>
					<option value="buy">Buy a hut </option>
					<option value="rent">Rent a hut </option>
					<option value="details">Ask for details </option>
					<option value="other">Other</option>
				</select></br></br>
			

		<textarea id="message" placeholder="Your message here" rows="10" cols="70" maxlength="1000" required></textarea></br></br>
		<input type="submit" value="submit" id="submit"><br><br>
		 </form></div>

		 <script src="messageJS.js"></script>
		 </body>';

include ("footer.php");	
