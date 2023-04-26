<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Accueil</title>
    <link  href="css/accueilcss.css" rel="stylesheet" />
    <script src="javascrip/accueiljs.js"></script>
</head>



<body>
<?php
session_start(); // Démarrer la session
if ( isset($_SESSION['user_email'])){
    echo $_SESSION['user_nom'];
}
else {
    echo "Veuillez vous connecter ";
}
?>
<div class="cadremap">
    <iframe
    class="carte"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAB5vUbzXJRRkX_n9bt12cY-rHkKImQAO0 &q=Conservatoire+musique,Saint_Chamond">
</iframe>
<br>
    <p> Téléphone: 04 77 31 04 20
      <br>
      Horaire: <br>Lundi - Mercredi de 9h00-19h00 <br>
      Jeudi de 13h00 - 19h00 <br>
      Vendredis - Dimanche Fermé
    </p> 
  </div>

  <div class="eventmot"><h1> Evenement:  </h1></div>
  <div class="eventtxt" id="boite_de_text"></div>
  <button class="eventmot" id="button" value="Add" onclick="add()">add postite </button>
  
  <header>
    <div><img class="logo" src="image/logo.png">
        <ul class="menu">
            <li><a href="">Accueil</a></li>
            <li class="sousmenu">Mes Cours
                <ul class="niveau2">
                  <li>Année 1</li>
		  <li>Année 2</li>
		  <li>Année 3</li>
		  <li>Année 4</li>
                </ul>
            </li>
            <li>Information</li>
            <li class="sousmenu">Mon Profil
                <ul class="niveau2">
                    <li>Mon compte</li>
                    <li>Mes information</li>
                </ul>
            </li>
        </ul>
    </div>
    <a href="login.html"><img class="profil" src="image/profil-de-lutilisateur.png"> </a>

  </header>
   
</body> 

