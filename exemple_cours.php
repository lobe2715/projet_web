<!DOCTYPE html>
<html lang=”fr”>

<head>
    <meta charset=”utf-8”>
    <title>Accueil</title>
    <link  href="css/exemple_courscss.css" rel="stylesheet" />
</head>



<body>
  <label for="menu">Ajouter:</label>
  <select id="menu" name="menu">
    <option value="texte">Textarea</option>
    <option value="image">Image</option>
    <option value="audio">Audio</option>
    <option value="titre">Titre</option>
  </select>
  <button id="ajouter">Ajouter</button>
  <div class="eventtxt" id="elements"></div>
  
  <header>
    <div><img class="logo" src="image/logo.png">
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
    <a href="login.html"><img class="profil" src="image/profil-de-lutilisateur.png"> </a>

  </header>
  <script src="javascrip/exemple_coursjs.js"></script>
</body> 

