var choix = "";
var ajouterBtn = document.getElementById("ajouter");
var elementsDiv = document.getElementById("elements");
var lastAddedType = "";

ajouterBtn.addEventListener("click", function() {
    switch(choix) {
    case "texte":
	ajouter_textarea();
	break;
    case "image":
	ajouter_image();
	break;
    case "audio":
	ajouter_audio();
	break;
    case "titre":
	ajouter_titre();
	break;
    }
});

function ajouter_textarea() {
    var textarea = document.createElement("textarea");
    var br = document.createElement("br");

    //ajoute le textarea au  div
    elementsDiv.appendChild(textarea);
    textarea.setAttribute("class","classtest");
    document.getElementById("menu").selectedIndex = 0;
    
    var sauvegarder = document.createElement("button");
    sauvegarder.innerHTML = "Sauvegarder";
    sauvegarder.addEventListener("click", function() { alert("IMPLEMENTER LE SAVE");});
    elementsDiv.appendChild(sauvegarder);
    
    //créer le bouton de suppréssion du textarea 
    var supprimer = document.createElement("button");
    supprimer.innerHTML = "Supprimer";
    supprimer.addEventListener("click", function() {
	elementsDiv.removeChild(textarea);
	elementsDiv.removeChild(br);
	elementsDiv.removeChild(supprimer);
	elementsDiv.removeChild(sauvegarder);
    });
    elementsDiv.appendChild(supprimer);
    elementsDiv.appendChild(br);
    
    
    lastAddedType = "textarea";
}


function ajouter_image() {
    var input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";
    document.getElementById("menu").selectedIndex = 1;
    
    
    input.click();
    input.addEventListener("change", function() {
	var reader = new FileReader();
	reader.onload = function() {
	    //créer l'image à partir du choix de l'utilisateur 
	    var image = document.createElement("img");
	    var br = document.createElement("br");
	    image.src = reader.result;
	    elementsDiv.appendChild(image);
	    elementsDiv.appendChild(br);
	    elementsDiv.appendChild(document.createElement("br"));

	    var sauvegarder = document.createElement("button");
	    sauvegarder.innerHTML = "Sauvegarder";
	    sauvegarder.addEventListener("click", function() { alert("IMPLEMENTER LE SAVE");});
	    elementsDiv.appendChild(sauvegarder);
	    
	    //bouton supprimer 
	    var supprimer = document.createElement("button");
	    supprimer.innerHTML = "Supprimer";
	    supprimer.addEventListener("click", function() {
		elementsDiv.removeChild(image);
		elementsDiv.removeChild(br);
		elementsDiv.removeChild(supprimer);
		elementsDiv.removeChild(sauvegarder);
	    })
	    elementsDiv.appendChild(supprimer);
 	    elementsDiv.appendChild(br);
	    
	}
	reader.readAsDataURL(input.files[0]);
    });
    
    lastAddedType = "image";
}


function ajouter_audio() {
    var input = document.createElement("input");
    input.type = "file";
    input.accept = "audio/*";
    document.getElementById("menu").selectedIndex = 2;
    lastAddedType = "audio";
    //Même façon de faire que pour img mais fait pour l'audio

    input.click();
    input.addEventListener("change", function() {
	var reader = new FileReader();
	reader.onload = function() {
	    var audio = document.createElement("audio");
	    var br = document.createElement("br");
	    audio.src = reader.result;
	    audio.controls = true;
	    elementsDiv.appendChild(audio);

	    var sauvegarder = document.createElement("button");
	    sauvegarder.innerHTML = "Sauvegarder";
	    sauvegarder.addEventListener("click", function() { alert("IMPLEMENTER LE SAVE");});
	    elementsDiv.appendChild(sauvegarder);
	    
	    //bouton supprimer
	    var supprimer = document.createElement("button");
	    supprimer.innerHTML = "Supprimer";
	    supprimer.addEventListener("click", function() {
		elementsDiv.removeChild(audio);
		elementsDiv.removeChild(br);
		elementsDiv.removeChild(supprimer);
		elementsDiv.removeChild(sauvegarder);
	    });
	    elementsDiv.appendChild(supprimer);
	    elementsDiv.appendChild(br);
	}
	reader.readAsDataURL(input.files[0]);
    });
   
}

function ajouter_titre() {
    var textarea = document.createElement("textarea");
    var br = document.createElement("br");
    
    //ajoute le textarea au  div
    elementsDiv.appendChild(textarea);
    textarea.setAttribute("class","titre");
    document.getElementById("menu").selectedIndex = 3;

    var sauvegarder = document.createElement("button");
    sauvegarder.innerHTML = "Sauvegarder";
    sauvegarder.addEventListener("click", function() { alert("IMPLEMENTER LE SAVE");});
    elementsDiv.appendChild(sauvegarder);
    
    //créer le bouton de suppréssion du textarea
    var supprimer = document.createElement("button");
    supprimer.innerHTML = "Supprimer";
    supprimer.addEventListener("click", function() {
	elementsDiv.removeChild(textarea);
	elementsDiv.removeChild(br);
	elementsDiv.removeChild(supprimer);
	elementsDiv.removeChild(sauvegarder);
    });
    elementsDiv.appendChild(supprimer);
    elementsDiv.appendChild(br);
    
    lastAddedType = "titre";
}


document.getElementById("menu").addEventListener("change", function() {
    choix = this.value;
    this.selectedIndex = 0;
});
