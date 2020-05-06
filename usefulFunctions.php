<?php 

function headerFunc ($titre) {
	echo '<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/currentStyle.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<title>' . $titre . '</title>
	</head>
	<body>';
	include ('header.php');
}


