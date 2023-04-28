<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Insertion</title>
</head>
<body>
<?php if (  isset($_POST['id_court'])
    && isset($_POST['type'])
    && isset($_POST['contenu'])){
    
    $type = $_POST['type'];
    $contenu = $_POST['contenu'];
    $id_court = $_POST['id_court'];

    /*INCLUDE ET CONNEXION*/
    include('connex.inc.php');
    $pdo = connexion('gs05790v');


    try{
        echo $type ;
        echo $id_court;
        echo $contenu;
        $stmt = $pdo->prepare("INSERT INTO ELEMENT (id_court, type, contenu) VALUES (:id_court, :type, :contenu)");
        $stmt->bindParam(':id_court', $id_court);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            echo '<p>Ajout effectué</p>';
            header('Location: ../exemple_cours.php?id_court='.$id_court);
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
    }
    ?>
</body>
</html>
