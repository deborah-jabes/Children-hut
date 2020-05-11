<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/fifi.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png" />
	<title>New Ad</title>
</head>
<body>

	<?php include("header.php");
		include("db_connection.php");
		session_start();
		//https://developer.mozilla.org/fr/docs/Web/API/FileReader/readAsDataURL
	if (isset($_SESSION["Email_address"])){
	?>

	<script type="text/javascript">
		function loadpreview1(){
			var preview1 = document.querySelector('#preview1');
			var file1 = document.querySelector('#fileToUpload1').files[0];
			var reader1 = new FileReader();

			reader1.addEventListener("load",function(){
				preview1.src = reader1.result
			},false);

			if (file1){
				reader1.readAsDataURL(file1);
			}
		}

		function loadpreview2(){
			var preview2 = document.querySelector('#preview2');
			var file2 = document.querySelector('#fileToUpload2').files[0];
			var reader2 = new FileReader();

			reader2.addEventListener("load",function(){
				preview2.src = reader2.result
			},false);

			if (file2){
				reader2.readAsDataURL(file2);
			}
		}
	</script>

	<section class="newClassifiedAd">
		<h1>Create a new classified ad</h1>
		<div class="divForm">
			<form method="post" action="new_classified_adC.php" enctype="multipart/form-data" autocomplete="off">
				<div class="imagePreview">
					<div class="addpading">
						<img src="images/hut.png" id="preview1" class="previewimg">
						<br>
						<input type="file" name="fileToUpload1" id="fileToUpload1" onchange="loadpreview1()" required>
					</div>
					<div class="addpading">
						<img src="images/hut.png" id="preview2" class="previewimg">
						<br>
						<input type="file" name="fileToUpload2" id="fileToUpload2" onchange="loadpreview2()">
					</div>
				</div>

				<div class="newAdSpecs">
					<div>
						<input type="text" name="Title" id="Title" placeholder="Name" maxlength="50" required>
						<br>
						<input type="text" name="Material" id="Material" placeholder="Main Material" maxlength="20" required>
						<br>
						<input type="text" name="Color" id="Color" placeholder="Main Color" maxlength="20" required>
						<br>
						<input type="text" name="WindowsNB" id="WindowsNB" placeholder="Number of windows" maxlength="2" required>
						<br>
						<input type="checkbox" name="Slide" id="Slide" value="on">
						<label for="Slide">Slide</label>
						<br>
						<input type="text" name="FloorsNB" id="FloorsNB" placeholder="Number of floors" maxlength="2" required>
						<br>
						<input type="text" name="SurfaceArea" id="SurfaceArea" placeholder="Surface area in m²" maxlength="3" required>
						<br>
						<input type="text" name="CeilingHeight" id="CeilingHeight" placeholder="Ceiling Height" maxlength="4" required>
						<br>
						<input type="checkbox" name="Terrace" id="Terrace" value="on">
						<label for="Terrace">Terrace</label>
						<br>
						<input type="checkbox" name="Wheels" id="Wheels" value="on"Ar>
						<label for="Wheels">Wheels</label>
					</div>
					<div class="Rinfodiv">
						<input type="text" name="Price" id="Price" placeholder="Price in €" maxlength="6" required>
						<br>
						<input type="text" name="Town" id="Town" placeholder="Town" maxlength="30" required>
						<br>
						<textarea name="Description" id="Description" placeholder="Description" maxlength="10000" rows="7"></textarea>
						<br>
						<div class="sellrentdiv">
							<div>
								<input type="radio" name="SellRent" id="Sell" value="sell" checked>
								<label for="Sell">Sell</label>
							</div>
							<div>
								<input type="radio" name="SellRent" id="Rent" value="rent">
								<label for="Rent">Rent</label>
							</div>
						</div>
					</div>
				</div>
				<input type="submit" name="submit" value="Publish">
			</form>
		</div>
		
	</section>

	<?php 
	}else{
		header("Location: login.php");
	}
		
	include("footer.php"); ?>

</body>
</html>
