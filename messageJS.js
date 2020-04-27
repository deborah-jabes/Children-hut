function replaceAndCreate () {

	let formulaireMessage = document.getElementById("formulaireMessage");
	let image = document.createElement ("img");
	image.id = "image_check";
	image.src = "/images/check_Circle.png";
	image.alt = "check_Circle";
	let submit = document.getElementById("submit");
	
	formulaireMessage.append (image);
	formulaireMessage.replaceChild (image, submit);

	let newButton = document.createElement("button");
	let spanButton = document.createElement("span");
	let linkButton = document.createElement("a");
	
	newButton.id = "returnHome";
	linkButton.innerHTML = "HOME";
	newButton.append(spanButton);
	newButton.append(linkButton);	
	linkButton.href ="http://locagarden.alwaysdata.net/index.php";
	formulaireMessage.appendChild(newButton);

	//sending the email 
	/*let email = document.getElementById ("mailAdr").value;
	let subject = document.getElementById ("Objects").value;
	let message = document.getElementById ("message").value;
	window.location.href = "mailto:" + email 
	+ "?subject=" + escape (subject) 
	+ "&body=" + escape (message);*/

	//server based so can't call it from client-sided js
	<?php

		echo 'salut';

		$to = $_POST['mail'];
		$name = $_POST['name'];

		$subject = $_POST['object'];
		$body = $_POST['msg'];

		$mailer = new PHPMailer();

		//Settings
		$mailer->IsSMTP();
		$mail->CharSet = 'UTF-8';

		$mail->Host       = "smtp-locagarden.alwaysdata.net"; // SMTP server 
		$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Port       = 25;                    // set the SMTP port to default
		$mail->Username   = "locagarden"; // SMTP account username
		$mail->Password   = "Loc@Garden1404";        // SMTP account password

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = 'hello ' + $name;

		$mail->send();
		mail ($to, $subject, $message);

	?>
}

function disable () {
	let clickToSelect = document.getElementById("clickToSelect");
	clickToSelect.disabled = true;
}

