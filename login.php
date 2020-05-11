<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png" />
</head>
<body>

	<?php include("header.php"); ?>

	<section class="accountid">
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

		<img src="images/hut2.png" class="hutImage center">
	</section>

	<?php include("footer.php"); ?>
    
</body>
</html>