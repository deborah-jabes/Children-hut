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
	window.location.href = "mailto:" + email + "?subject=" + escape (subject) + "&body=" + escape (message);*/

}

function disable () {
	let clickToSelect = document.getElementById("clickToSelect");
	clickToSelect.disabled = true;
}

