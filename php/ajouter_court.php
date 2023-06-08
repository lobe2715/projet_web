<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Insertion</title>
  </head>
  <body>
  <?php
  if (   isset($_POST['nom'])
      && isset($_POST['classe']) ) {
      $nom = $_POST['nom'];
      $classe = $_POST['classe'];
      include('connex.inc.php');
      $pdo = connexion('gs05790v');
      try {
          $stmt = $pdo->prepare('INSERT INTO COURT (id,nom,classe) VALUES (NULL,:nom,:classe)');
          $stmt->bindParam(':nom', $nom);
          $stmt->bindParam(':classe', $classe);
          
          $stmt->execute();

          if ($stmt->rowCount() == 1) {
              echo '<p>Ajout effectué</p>';
              $id_select = $pdo->lastInsertId();
              header('location: /page_de_court.php?id_court='.$id_select.'&classe='.$classe);
              exit();
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
