function afficherChamp() {
    var typeElement = document.getElementById("type_element").value;
    var champElement = document.getElementById("champ_element");
    if (typeElement == "texte") {
	champElement.innerHTML = '<label for="texte_element">Texte :</label><br><textarea id="texte_element" name="texte_element"></textarea>';
    }else if (typeElement == "titre") {
	champElement.innerHTML = '<label for="titre_element">Titre :</label><br><textarea id="titre_element" name="titre_element"></textarea>';
    }
    else if (typeElement == "audio") {
	champElement.innerHTML = '<label for="audio_element">Audio :</label><br><input type="file" id="audio_element" name="audio_element">';
    } else if (typeElement == "image") {
	champElement.innerHTML = '<label for="image_element">Image :</label><br><input type="file" id="image_element" name="image_element">';
    }
}
