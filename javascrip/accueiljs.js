function add() {
    var div = document.createElement("div");
    var text_zone = document.createElement("textarea");
    var removeButton = document.createElement("button");
    
    text_zone.setAttribute("type", "text");
    text_zone.setAttribute("name", "text_zone[]");
    text_zone.setAttribute("class","classtest");
    removeButton.innerHTML = "X";
    removeButton.onclick = function() {
	this.parentNode.parentNode.removeChild(this.parentNode);
    };
  
    div.appendChild(text_zone);
    div.appendChild(removeButton);
    document.getElementById("boite_de_text").appendChild(div);
}
