<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
	<title>New Ad</title>
</head>
<body>

	<?php include("header.php");
		include("db_connection.php");
		session_start();
	?>

	<section class="newClassifiedAd">
		<h1>Create a new classified ad</h1>
		<div class="divForm">
			<form method="post" action="new_classified_adC.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td>
							<img src="images/hut.png" id="preview1">
						</td>
						<td>
							<img src="images/hut.png" id="preview2">
						</td>
					</tr>
					<tr>
						<td>
							<input type="file" name="fileToUpload1" id="fileToUpload1">
						</td>
						<td>
							<input type="file" name="fileToUpload2" id="fileToUpload2">
						</td>
					</tr>
				</table>
				<br>
				<input type="text" name="Title" id="Title" placeholder="Name" maxlength="50" required>
				<br>
				<input type="text" name="Material" id="Material" placeholder="Main Material" maxlength="20" required>
				<br>
				<input type="text" name="Color" id="Color" placeholder="Main Color" maxlength="20" required>
				<br>
				<input type="text" name="WindowsNB" id="WindowsNB" placeholder="Number of windows" maxlength="2">
				<br>
				<input type="checkbox" name="Slide" id="Slide">
				<label for="Slide">Slide</label>
				<br>
				<input type="text" name="FloorsNB" id="FloorsNB" placeholder="Number of floors" maxlength="2">
				<br>
				<input type="text" name="SurfaceArea" id="SurfaceArea" placeholder="Surface area in m3" maxlength="3">
				<br>
				<input type="text" name="CeilingHeight" id="CeilingHeight" placeholder="Ceiling Height" maxlength="4">
				<br>
				<input type="checkbox" name="Terrace" id="Terrace">
				<label for="Terrace">Terrace</label>
				<br>
				<input type="checkbox" name="Wheels" id="Wheels">
				<label for="Wheels">Wheels</label>
				<br>
				<input type="text" name="Price" id="Price" placeholder="Price" maxlength="6" required>
				<br>
				<input type="text" name="Country" id="Country" placeholder="Country" maxlength="30" required>
				<br>
				<input type="text" name="Description" id="Description" placeholder="Description" maxlength="10000">
				<br>
				<input type="radio" name="SellRent" id="Sell" value="sell" checked>
				<label for="Sell">Sell</label>
				<br>
				<input type="radio" name="SellRent" id="Rent" value="rent">
				<label for="Rent">Rent</label>
				<br>
				<input type="submit" name="submit" value="Publish">
			</form>
		</div>
		
	</section>

	<?php include("footer.php"); ?>

</body>
</html>
