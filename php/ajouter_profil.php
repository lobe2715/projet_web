<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Insertion</title>
  </head>
  <body>
      <?php if (   isset($_POST['Nom'])
                && isset($_POST['Prenom'])
                && isset($_POST['Identifiant'])
                && isset($_POST['Adresse'])
                && isset($_POST['Mdp'])
                && isset($_POST['Tel'])) {
          $nom = $_POST['Nom'];
          $prenom = $_POST['Prenom'];
          $identifiant = $_POST['Identifiant'];
          $adresse = $_POST['Adresse'];
          $mdp = $_POST['Mdp'];
          $tel = $_POST['Tel'];
          include('connex.inc.php');
          include('create.php');
          $pdo = connexion('gs05790v');
          create($pdo);
          try {
              $stmt = $pdo->prepare('INSERT INTO PROFILS (nom, prenom,identifiant,adresse,mdp,tel) VALUES (:Nom, :Prenom,:Identifiant,:Adresse, :Mdp, :Tel)');
              $stmt->bindParam(':Nom', $nom);
              $stmt->bindParam(':Prenom', $prenom);
              $stmt->bindParam(':Identifiant', $identifiant);
              $stmt->bindParam(':Adresse', $adresse);
              $stmt->bindParam(':Mdp', $mdp);
              $stmt->bindParam(':Tel', $tel);
              $stmt->execute();

              if ($stmt->rowCount() == 1) {
                  echo '<p>Ajout effectué</p>';
              } else {
                  echo '<p>Erreur</p>';
              }
          } catch(PDOException $e) {
              echo '<p>Problème PDO</p>';
              echo $e->getMessage();
          }
          $stmt->closeCursor();
          $pdo = null;
      } else {
          echo "<p>Mauvais paramètres</p>";
      }?>
  </body>
</html>
