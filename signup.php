<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png" />
    <title>Sign-Up</title>
</head>
<body>

	<?php include("header.php"); ?>

	<section class="accountid">
		<div class="accountpicture">
			<img src="images/profils/DefaultAccount.png" class="center">
		</div>
		<br>
		<form method="post" action="signupC.php" enctype="multipart/form-data" class="center">
			<input type="text" name="Email_address" id="Email_address" placeholder="Email Adress" required>
			<br>
			<input type="text" name="Name" id="Name" placeholder="First Name" required>
			<br>
			<input type="text" name="Surname" id="Surname" placeholder="Surname" required>
			<br>
			<input type="password" name="Password" id="Password" placeholder="Password" required>
			<br>
			<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-type Password" required>
			<br>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<br>
			<p>Field not required</p>
			<br>
			<input type="submit" name="submit" value="Sign-up">
			<br>
		</form>
		<p>You already have an account ? <a href="login.php">Login now</a></p>

		<img src="images/hut2.png" class="hutImage center">
	</section>

	<?php include("footer.php"); ?>

</body>
</html>