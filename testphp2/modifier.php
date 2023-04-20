<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Modification</title>
  </head>
  <body>
      <?php if (isset($_GET['id'])) {
          $id = intval($_GET['id']);

          include('connex.inc.php');
          $pdo = connexion('gs05790v');
          try {
              $stmt = $pdo->prepare('SELECT * FROM etudiant WHERE id = :id');
              $stmt->bindParam(':id', $id);
              $stmt->execute();
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              if (count($results) > 0) {
                  $result = $results[0];
                  echo '<p>Étudiant⋅e '.$id.'</p>';
?>
<form action="enregistrer.php" method="POST">
    <label>Nom : <input type="text" name="nom" value="<?php echo $result['nom']; ?>"></label>
    <label>Filiere :
        <select name="filiere">
            <option value="L1" <?php if ($result['filiere'] == "L1") { echo 'selected="selected"'; }?>>L1</option>
            <option value="L2" <?php if ($result['filiere'] == "L2") { echo 'selected="selected"'; }?>>L2</option>
            <option value="L3" <?php if ($result['filiere'] == "L3") { echo 'selected="selected"'; }?>>L3</option>
        </select>
    </label>
    <label>Âge : <input type="text" name="age" value="<?php echo $result['age']; ?>"></label>
     <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
     <button type="submit">Modifier</button>
</form>
<?php
              } else {
                  echo '<p>Étudiant⋅e non trouvé⋅e</p>';
              }
              $stmt->closeCursor();
              $pdo = null;
          } catch(PDOException $e) {
              echo '<p>Problème PDO</p>';
              echo $e->getMessage();
          }
      } else {
          echo "<p>Mauvais paramètres</p>";
      }?>
  </body>
</html>
