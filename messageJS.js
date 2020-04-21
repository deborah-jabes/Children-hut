function replaceAndCreate () {

	var formulaireMessage = document.getElementById("formulaireMessage");
	var image = document.createElement ("img");
	image.id = "image_check";
	image.src = "/images/check_Circle.png";
	image.alt = "check_Circle";
	var submit = document.getElementById("submit");
	
	formulaireMessage.append (image);
	formulaireMessage.replaceChild (image, submit);

	var newButton = document.createElement("button");
	var spanButton = document.createElement("span");
	
	newButton.id = "returnHome";
	spanButton.innerHTML = "HOME";
	newButton.append(spanButton);
	formulaireMessage.appendChild(newButton);
}

function disable () {
	var clickToSelect = document.getElementById("clickToSelect");
	clickToSelect.disabled = true;
}

