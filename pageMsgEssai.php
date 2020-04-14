<?php
function headerFunc ($titre) {
	echo '<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="currentStyle.css">
	<title>' . $titre . $color . '</title>
	</head>
	<body>';
}

headerFunc ('Message');

echo '<h1>Salut</h1>';
