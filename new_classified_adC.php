<?php
	include("db_connection.php");
	session_start();

	if (isset($_SESSION["Email_address"])){
		$targetdir = "images/huts/".microtime(true);
		mkdir($targetdir);
		$targetFile1 = $targetdir."/1.png";
		$fullFile = explode(".", $_FILES["fileToUpload1"]["name"]);
		$imageFileType = strtolower(end($fullFile));
		$uploadOK = 1;
		if(isset($_POST["submit"])){
			$check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
			if ($check !== false) {
				echo "All good";
				$uploadOK = 1;
			}else{
				echo "File is not an image.";
				$uploadOK = 0;
			}
		}
		if (file_exists($targetFile1)) {
			echo "File already exists";
			$uploadOK = 0;
		}
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			echo "Only jpg, png and jpeg supported";
			$uploadOK = 0;
		}
		if ($uploadOK == 1) {
			if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $targetFile1)) {
				echo "All good";
				if (is_uploaded_file($_FILES["fileToUpload2"]["tmp_name"])) {
					$targetFile2 = $targetdir."/2.png";
					$fullFile = explode(".", $_FILES["fileToUpload2"]["name"]);
					$imageFileType = strtolower(end($fullFile));
					$uploadOK = 1;
					if(isset($_POST["submit"])){
						$check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
						if ($check !== false) {
							echo "All good";
							$uploadOK = 1;
						}else{
							echo "File is not an image.";
							$uploadOK = 0;
						}
					}
					if (file_exists($targetFile2)) {
						echo "File already exists";
						$uploadOK = 0;
					}
					if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
						echo "Only jpg, png and jpeg supported";
						$uploadOK = 0;
					}
					if ($uploadOK == 1) {
						if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $targetFile2)) {
							echo "All good";
							createHut();
						} else {
							echo "File not uploaded";
						}
					} else {
						echo "File not uploaded";
					}
				}else{
					createHut();
				}
			} else {
				echo "File not uploaded";
			}
		} else {
			echo "File not uploaded";
		}	
	}else{
		header("Location: login.php");
	}

	

	function createHut(){
		global $db;
		global $targetdir;
		$authorid = $_SESSION["User_id"];
		$Requestok = 1;
		if (!is_numeric($_POST["WindowsNB"])) {
			echo "87";
			$Requestok = 0;
		}
		if (!is_numeric($_POST["FloorsNB"])) {
			echo "90";
			$Requestok = 0;
		}
		if (!empty($_POST["SurfaceArea"])) {
			if (!is_numeric($_POST["SurfaceArea"])) {
				$Requestok = 0;
				echo "96";
			}else{
				$SurfaceArea = $_POST["SurfaceArea"];
			}
		}else{
			$SurfaceArea = null;
		}
		if(empty($_POST["Slide"])){
			$Slide = 0;
		}else{
			$Slide = 1;
		}
		if(empty($_POST["Terrace"])){
			$Terrace = 0;
		}else{
			$Terrace = 1;
		}
		if(empty($_POST["Wheels"])){
			$Wheels = 0;
		}else{
			$Wheels = 1;
		}
		if (!is_numeric($_POST["Price"])) {
			$Requestok = 0;
			echo "120";
		}else{
			if (strpos($_POST["Price"], ",")) {
				$Price = str_replace(",",".",$_POST["Price"])
			}else{
				$Price = $_POST["Price"];
			}
		}
		if(empty($_POST["Description"])){
			$Description = null;
		}else{
			$Description = $_POST["Description"];
		}
		if($_POST["SellRent"]="sell"){
			$toPurchase = 1;
			$toRent = 0;
		}else{
			$toPurchase = 0;
			$toRent = 1;
		}
		if ($Requestok == 1) {
			$result = $db->prepare('INSERT INTO huts(Title, Principal_material, Hut_color, Windows_nb, Slide, Floors_nb, Surface_area, Ceiling_height, Terrace, Wheels, Price, Town, Description, toPurchase, toRent, Purchased, Pictures_path, Author_id) VALUES (:Title, :Principal_material, :Hut_color, :Windows_nb, :Slide, :Floors_nb, :Surface_area, :Ceiling_height, :Terrace, :Wheels, :Price, :Town, :Description, :toPurchase, :toRent, :Purchased, :Pictures_path, :Author_id)');
			$result->execute(array(
				'Title'=>$_POST["Title"],
				'Principal_material'=>$_POST["Material"],
				'Hut_color'=>$_POST["Color"],
				'Windows_nb'=>$_POST["WindowsNB"],
				'Slide'=>$Slide,
				'Floors_nb'=>$_POST["FloorsNB"],
				'Surface_area'=>$SurfaceArea,
				'Ceiling_height'=>$_POST["CeilingHeight"],
				'Terrace'=>$Terrace,
				'Wheels'=>$Wheels,
				'Price'=>$_POST["Price"],
				'Town'=>$_POST["Town"],
				'Description'=>$Description,
				'toPurchase'=>$toPurchase,
				'toRent'=>$toRent,
				'Purchased'=>0,
				'Pictures_path'=>$targetdir,
				'Author_id'=>$authorid
			));
			header("Location: myaccount.php")
		}else{
			echo "Not good";
			header("Location: new_classified_ad.php")
		}
	}
?>