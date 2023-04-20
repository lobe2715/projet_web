function add() {
    X = document.createElement('textarea');
    X.setAttribute("id", "commentaire");
    X.setAttribute("name", "commentaire");
    X.setAttribute("maxlength", 40);
    X.setAttribute("style","resize:none");
    X.setAttribute("class","classtest");
    mon_input_texte.appendChild(X) ;
}
