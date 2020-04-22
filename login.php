<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="assets/main.css" rel="stylesheet" type="text/css">
</head>
<body>

	<?php include("header.php"); ?>

	<img class="headimage" src="images/head.jpg" alt="Head image">

	<section class="account">
		<div class="accountpicture">
			<img src="images/profils/DefaultAccount.png" class="center">
		</div>
		<br>
		<form method="post" action="loginC.php" class="center">
			<input type="text" name="Email_address" id="Email_address" placeholder="Email Adress">
			<br>
			<input type="password" name="Password" id="Password" placeholder="Password">
			<br>
			<input type="submit" name="send" value="Login">
		</form>
	</section>

	<?php include("footer.php"); ?>
    
</body>
</html>