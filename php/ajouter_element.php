<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Insertion</title>
</head>
<body>
<?php if (  isset($_POST['id_court'])
    && isset($_POST['classe'])
    && isset($_POST['type_element'])){
    $classe=$_POST['classe'];
    $type = $_POST['type_element'];
    if ($type == 'texte') {
        $contenu = $_POST['texte_element'];
    }
    else if($type == 'titre'){
        $contenu = $_POST['titre_element'];
    }
    else if ($type == 'audio') {
        $nom_fichier = $_FILES['audio_element']['name'];
        $chemin_fichier = $_FILES['audio_element']['tmp_name'];
        $extension_fichier = pathinfo($nom_fichier,PATHINFO_EXTENSION);
        $nouveau_nom_fichier = uniqid().'.'.$extension_fichier;
        $chemin_nouveau_fichier = '../asset/'.$nouveau_nom_fichier;
    // Enregistre l'image dans un dossier
        if(move_uploaded_file($chemin_fichier,$chemin_nouveau_fichier)){
            $contenu=$chemin_nouveau_fichier;
        }
        else{
            echo "<p>ERREUR enregistrement</p>";
            echo "Chemin du fichier :". $chemin_fichier;
            exit();
        }
        echo "Chemin du fichier :". $chemin_fichier;
  }

    else if ($type == 'image') {
        $nom_fichier = $_FILES['image_element']['name'];
        $chemin_fichier = $_FILES['image_element']['tmp_name'];
        $extension_fichier = pathinfo($nom_fichier,PATHINFO_EXTENSION);
        $nouveau_nom_fichier = uniqid().'.'.$extension_fichier;
        $chemin_nouveau_fichier = '../asset/'.$nouveau_nom_fichier;
    // Enregistre l'image dans un dossier
        if(move_uploaded_file($chemin_fichier,$chemin_nouveau_fichier)){
            $contenu=$chemin_nouveau_fichier;
        }
        else{
            echo "<p>ERREUR enregistrement</p>";
            echo "Chemin du fichier :". $chemin_fichier;
            exit();
        }
        echo "Chemin du fichier :". $chemin_fichier;
  }
    $id_court = $_POST['id_court'];

    /*INCLUDE ET CONNEXION*/
    include('connex.inc.php');
    $pdo = connexion('gs05790v');


    try{
        echo $chemin_fichier ;
        echo "<br></br>";
        echo $type ;
        echo "<br></br>";
        echo $id_court;
        echo "<br></br>";
        echo $contenu;
        echo "<br></br>";
        $stmt = $pdo->prepare("INSERT INTO ELEMENT (id_court, type, contenu) VALUES (:id_court, :type, :contenu)");
        $stmt->bindParam(':id_court', $id_court);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            echo '<p>Ajout effectué</p>';
            header('Location: ../page_de_court.php?id_court='.$id_court.'&classe='.$classe);
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
