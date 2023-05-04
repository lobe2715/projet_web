<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Page de cour</title>
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
    include('php/connex.inc.php');
    $pdo = connexion('gs05790v');
    include('php/liste_cours.php');
    include('php/chargement_cour.php');
    include('php/index_des_cours.php');
    ?>
    <div class="colonne">
        
    <?php
    echo '<div class="g1">';
    index_des_cours($pdo,$_GET['classe']);
    echo '</div>';
    if (isset($_GET['id_court'])){
        echo '<div class="g2">';
        liste_cours($pdo,htmlspecialchars($pdo,$_GET['classe']),htmlspecialchars($_GET['id_court']));
        echo '</div>';
    }
    else {
        echo '<div class="g2">';
        echo '<img src="https://assets.codepen.io/6093409/sprocket.svg" alt="Logo HubSpot" width=100% height=100%/>';
        echo '</div>';
    }
    echo '<div class="g3">';
    echo '<form method="POST" action="php/ajouter_court.php">';
    echo '<input type="text" name="nom" placeholder="Nom du court" required>';
    echo '<input type="hidden" name="classe" value="'.htmlspecialchars($_GET['classe']);
    echo '<input type="submit" value="Ajouter"></form>';

    echo '</div>';
    ?>
</div>
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
