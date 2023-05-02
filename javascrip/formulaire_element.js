// Au chargement de la page, on cache le conteneur du formulaire d'élément
$(document).ready(function() {
  $("#element-form-container").hide();
});

// Lorsqu'on sélectionne un type d'élément, on affiche le formulaire correspondant
$("#select-element-type").on("change", function() {
  var elementType = $(this).val();
  $("#element-form-container").empty();
  if (elementType === "image" || elementType === "audio") {
    // Si c'est une image ou un audio, on affiche un bouton "Parcourir" pour sélectionner un fichier
    $("#element-form-container").append(
      '<label for="input-element-file">Fichier :</label>' +
      '<input type="file" id="input-element-file" name="element-file">'
    );
  } else if (elementType === "text") {
    // Si c'est du texte, on affiche une zone de texte
    $("#element-form-container").append(
      '<label for="input-element-text">Texte :</label>' +
      '<textarea id="input-element-text" name="element-text"></textarea>'
    );
  }
  // On affiche le conteneur du formulaire d'élément
  $("#element-form-container").show();
});
