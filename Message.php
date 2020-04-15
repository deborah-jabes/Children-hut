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
<div>
	<p>CHILDREN\'S HUT</p>
	<ul id="menu">
		<li><a href="index.html">HOME</a></li>
		<li><a href="#buy">BUY</a></li>
		<li><a href="#rent">RENT</a></li>
		<li><a href="#sell">SELL</a></li>
		<li><a href="#contact">CONTACT US</a></li>
	</ul>
</div>
';
