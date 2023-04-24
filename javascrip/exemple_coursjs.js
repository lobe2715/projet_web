var choix = "";
var ajouterBtn = document.getElementById("ajouter");
var elementsDiv = document.getElementById("elements");
var lastAddedType = "";

ajouterBtn.addEventListener("click", function() {
    switch(choix) {
    case "texte":
	ajouterTextarea();
	break;
    case "image":
	ajouterImage();
	break;
    case "audio":
	ajouterAudio();
	break;
    case "titre":
	ajouterTitre();
	break;
    }
});

// Fonction qui ajoute un textarea
function ajouterTextarea() {
    var textarea = document.createElement("textarea");
    var br = document.createElement("br");
    elementsDiv.appendChild(textarea);
    textarea.setAttribute("class","classtest");
    document.getElementById("menu").selectedIndex = 0;
    var supprimer = document.createElement("button");
    supprimer.innerHTML = "Supprimer";
    supprimer.addEventListener("click", function() {
	elementsDiv.removeChild(textarea);
	elementsDiv.removeChild(br);
	elementsDiv.removeChild(supprimer);
    });
    elementsDiv.appendChild(supprimer);
    elementsDiv.appendChild(br);
    lastAddedType = "textarea";
}

// Fonction qui ajoute une image
function ajouterImage() {
    var input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";
    input.addEventListener("change", function() {
	var reader = new FileReader();
	reader.onload = function() {
	    var image = document.createElement("img");
	    var br = document.createElement("br");
	    image.src = reader.result;
	    elementsDiv.appendChild(image);
	    elementsDiv.appendChild(br);
	    elementsDiv.appendChild(document.createElement("br"));
	    var supprimer = document.createElement("button");
	    supprimer.innerHTML = "Supprimer";
	    supprimer.addEventListener("click", function() {
		elementsDiv.removeChild(image);
		elementsDiv.removeChild(br);
		elementsDiv.removeChild(supprimer);
	    });
	    elementsDiv.appendChild(supprimer);
	    elementsDiv.appendChild(br);
	}
	reader.readAsDataURL(input.files[0]);
    });
    input.click();
    document.getElementById("menu").selectedIndex = 1;
    lastAddedType = "image";
}

// Fonction qui ajoute un audio
function ajouterAudio() {
    var input = document.createElement("input");
    input.type = "file";
    input.accept = "audio/*";
    input.addEventListener("change", function() {
	var reader = new FileReader();
	reader.onload = function() {
	    var audio = document.createElement("audio");
	    var br = document.createElement("br");
	    audio.src = reader.result;
	    audio.controls = true;
	    elementsDiv.appendChild(audio);
	    var supprimer = document.createElement("button");
	    supprimer.innerHTML = "Supprimer";
	    supprimer.addEventListener("click", function() {
		elementsDiv.removeChild(audio);
		elementsDiv.removeChild(br);
		elementsDiv.removeChild(supprimer);
	    });
	    elementsDiv.appendChild(supprimer);
	    elementsDiv.appendChild(br);
	}
	reader.readAsDataURL(input.files[0]);
    });
    input.click();
    document.getElementById("menu").selectedIndex = 2;

    // Met à jour la variable lastAddedType
    lastAddedType = "audio";
}

function ajouterTitre() {
    var textarea = document.createElement("textarea");
    var br = document.createElement("br");
    elementsDiv.appendChild(textarea);
    textarea.setAttribute("class","titre");
    document.getElementById("menu").selectedIndex = 3;
    var supprimer = document.createElement("button");
    supprimer.innerHTML = "Supprimer";
    supprimer.addEventListener("click", function() {
	elementsDiv.removeChild(textarea);
	elementsDiv.removeChild(br);
	elementsDiv.removeChild(supprimer);
    });
    elementsDiv.appendChild(supprimer);
    elementsDiv.appendChild(br);
    lastAddedType = "titre";
}

// Fonction qui gère le menu déroulant
document.getElementById("menu").addEventListener("change", function() {
    choix = this.value;
    this.selectedIndex = 0;
});
