<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
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
			<input type="text" name="Email_address" id="Email_address" placeholder="Email Adress" required>
			<br>
			<input type="password" name="Password" id="Password" placeholder="Password" required>
			<br>
			<input type="submit" name="send" value="Login">
		</form>
		<p>You don't have an account ? <a href="signup.php">Sign-up now</a></p>
	</section>

	<?php include("footer.php"); ?>
    
</body>
</html>