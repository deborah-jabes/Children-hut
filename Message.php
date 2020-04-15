<?php
function headerFunc ($titre) {
	echo '<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="currentStyle.css">
	<title>' . $titre . '</title>
	</head>
	<body>';
}

headerFunc ('Message');
 	
echo '
<div class="flex_container">
	<div class="titre_gauche">
		CHILDREN\'S HUTS
	</div>

	<div class="menu_droite">
		<ul id="menu">
			<li><a href="index.html">HOME</a></li>
			<li><a href="#buy">BUY</a></li>
			<li><a href="#rent">RENT</a></li>
			<li><a href="#sell">SELL</a></li>
			<li><a href="#contact">CONTACT US</a></li>

		</ul>
	</div>
</div>

<div class="valeursMessage">
	MESSAGE </br></br>
	<form action="">
	<input type="text" id="name" name="name" placeholder="Name"></br></br>
	<input type="text" id="mailAdr" name="mail" placeholder="e-mail address"></br></br>
	<select id="Objects">
		<option value="buy">Buy a hut </option>
		<option value="rent">Rent a hut </option>
		<option value="details">Ask for details </option>
		<option value="other">Other</option>
	</select></br></br>
	<textarea id="message" placeholder="Put your message here" rows="10" cols="100" maxlength="1000"></textarea></br></br>
	<input type="submit" value="submit">
	</form>
</div>
';
