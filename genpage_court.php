<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>ceci est un court</title>
    <link  href="css/exemple_cours.css" rel="stylesheet" />
    <script src="javascrip/exemple_coursjs.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>

    <body>
    <?php
    include ('php/chargement_cour.php');
    include ('php/supprimer_element.php');
    ?>

    
    <header>
        <div><img src="image/logo.png" class="logo"  alt="logo">
            <ul class="menu">
                <li><a href="accueil.php">Accueil</a></li>
                <li class="sousmenu">Mes Cours
                    <ul class="niveau2">
                        <li>Mon année</li>
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
        <a href="login.html"><img class="profil" src="image/profil-de-lutilisateur.png" width> </a>
        </header>
        <main>
            <div class="colonne">
                <div class="g1">test</div>
                
                <div class="g2"
                <menu>
                <?php chargement_court($_GET['id']);?>
                </menu>
            </div>

            <div class="g3">
                <form method="POST" action="php/ajouter_element.php" enctype="multipart/form-data">
                <input type="hidden" name="id_court" value="<?php echo htmlspecialchars($_GET['id']) ?>">
                <label for="type_element">Type d'élément :</label>
                <select id="type_element" name="type_element" onchange="afficherChamp()">
	                <option value="texte">Texte</option>
                 <option value="titre">Titre</option>
	             <option value="audio">Audio</option>
	          <option value="image">Image</option>
       </select>

       <div id="champ_element"></div>

       <input type="submit" value="Ajouter">
       </form>
   </div>
</main>
<footer>
    <img src="image/logo.png" class="logo"  alt="logo">
    </footer>
</body> 
</html>
