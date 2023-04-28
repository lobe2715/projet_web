<!DOCTYPE html>
<html lang=”fr”>

  <head>
    <meta charset=”utf-8”>
    <title>Accueil</title>
    <link  href="css/exemple_cours.css" rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>
<?php
include ('php/chargement_cour.php');    
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
              <?php chargement_court($_GET['id_court']);?>
              </menu>
         </div>
              <div class="g3">
                  <form method="POST" action="php/ajouter_element.php">
                  <input type="hidden" name="id_court" value="<?php echo htmlspecialchars($_GET['id_court']) ?>">
                  <label for="type">Type d'élément:</label>
                  <select class="visu"  id="type" name="type">
	                  <option value="texte">Texte</option>
	               <option value="audio">Audio</option>
	            <option value="image">Image</option>
	         <option value="titre">Titre</option>
      </select>
      <br>
      <label for="contenu">Contenu:</label>
      <br>
      <textarea id="contenu" name="contenu"></textarea>
      <br>
      <input type="submit" value="Ajouter">

      </form>
</div>
  </div>
</main>
<footer>
<img src="image/logo.png" class="logo"  alt="logo">
</footer>
</body> 
</html>
