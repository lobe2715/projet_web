<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>SUPPRIMER</title>
</head>
<body>

<?php if (  isset($_POST['id_element'])
    && isset($_POST['mon_id_court'])){
    $id=$_POST['id_element'];
    $id_court=$_POST['mon_id_court'];
    echo $id;
    echo $id_court;
    include("connex.inc.php");
    $pdo = connexion('gs05790v');
    try {
        $stmt = $pdo->prepare("DELETE FROM ELEMENT where id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
       header('location: /exemple_cours.php?id_court='.$id_court);
        exit();
        $stmt->closeCursor();
        $pdo = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        echo '<p>Problème avec la base</p>';
    }
    }

    ?>
</body>
</html>
