<?php
session_start(); // Démarrer la session
include ('php/connex.inc.php');
include ('php/liste_cours.php');
include ('php/liste_court_niveau.php');
$pdo= connexion('gs05790v');
?>
<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Accueil</title>
    <link rel="icon" type="image/svg+xml" href="/image/logos.ico" sizes="64x64">
    <link  href="css/exemple_cours.css" rel="stylesheet" >
    <script src="javascrip/accueiljs.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>



<body>

<header>
    <div><img class="logo" src="image/logo.png">
        <ul class="menu">
            <li><a href="">Accueil</a></li>
            <li class="sousmenu">Mes Cours
                <ul class="niveau2">
                <?php liste_niveau_cours($pdo); ?>
                </ul>
            </li>
            <li>Information</li>
            <ul class="niveau2">
          
            </ul>
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
<div class="eventmot"><h1> Evenement </h1></div>
<div class="eventtxt" id="boite_de_text"></div>
<button class="bouton_postite" id="button" value="Add" onclick="add()"> Ajouter postite </button>
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
