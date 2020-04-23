<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/main.css" rel="stylesheet" type="text/css">
    <title>Sign-Up</title>
</head>
<body>

	<?php include("header.php"); ?>

	<img class="headimage" src="images/head.jpg" alt="Head image">

	<section class="account">
		<div class="accountpicture">
			<img src="images/profils/DefaultAccount.png" class="center">
		</div>
		<br>
		<form method="post" action="signupC.php" enctype="multipart/form-data" class="center">
			<input type="text" name="Email_address" id="Email_address" placeholder="Email Adress">
			<br>
			<input type="text" name="Name" id="Name" placeholder="First Name">
			<br>
			<input type="text" name="Surname" id="Surname" placeholder="Surname">
			<br>
			<input type="password" name="Password" id="Password" placeholder="Password">
			<br>
			<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-type Password">
			<br>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<br>
			<input type="submit" name="submit" value="Sign-up">
			<br>
		</form>
		<p>You already have an account ? <a href="login.php">Login now</a></p>
	</section>

	<?php include("footer.php"); ?>

</body>
</html>