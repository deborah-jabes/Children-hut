<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Children's hut</title>
	<link rel="icon" href="images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/10a40eb87c.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--JQuery-->
</head>
<body id="body">
	
	<?php 
		include("header.php");
		include("db_connection.php");
		session_start();
	?>
		<section class="space"></section>

		<section class="seller">
			<div class="center">
				<h2>Become a seller/renter</h2>
				<div class="flexSection column">
					<div>
						<img src="images/seller.png" alt="" >
					</div>
					<div class="vertical">
						<center><p><span>Evaluate your hut</span><br />
						<strong>Ask for the price</strong></p>
						<p>Fill in the form to contact one of our real estate agents</p>
						<a class="typeform-share button" href="https://nicolasheudron.typeform.com/to/UmyEoa" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#ABDBFF;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" data-submit-close-delay="5" target="_blank">Form </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script></center>
					</div>
				</div>
			</div>
		</section>
	
	<section class="sellerInfo">
		<div class="center">
			<p>Depending on you want to rent or sale your hut, you need to create an account.</p>
			<center><p>We help you to fix the price. Fill in the form !</p></center>
			<br /><br /><br />
		</div>
	</section>

		<?php include("footer.php"); ?>

	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e82eeddb-4dac-4972-9a28-304a54f8e032";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>