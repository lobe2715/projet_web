<?php
session_start(); // Démarrer la session
include ('php/liste_cours.php');
?>
<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Accueil</title>
    <link  href="css/exemple_cours.css" rel="stylesheet" />
    <script src="javascrip/accueiljs.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>



<body">

<header>
    <div><img class="logo" src="image/logo.png">
        <ul class="menu">
            <li><a href="">Accueil</a></li>
            <li class="sousmenu">Mes Cours
                <ul class="niveau2">
                <?php liste_cours(); ?>

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
 <main>
<?php
if ( isset($_SESSION['user_email'])){
    echo $_SESSION['user_nom'];
}
else {
    echo "<br> Veuillez vous connecter <br>";
}
?>   
<div class="eventmot"><h1> Evenement:  </h1></div>
<div class="eventtxt" id="boite_de_text"></div>
<button class="eventmot" id="button" value="Add" onclick="add()">add postite </button>
<!--
<img  class="right" src="image/evenement.png" alt="evenement" width="900">
-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</main>

    <footer>
<div class="cadremap">
    <iframe
    class="carte"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAB5vUbzXJRRkX_n9bt12cY-rHkKImQAO0 &q=Conservatoire+musique,Saint_Chamond">
</iframe>
<br>

</div>
</footer>
    
</body> 
</html>
