<?php

function liste_cours(){
    include('connex.inc.php');
    include('create.php');
    $pdo = connexion('gs05790v');
    create_court($pdo);
    try{
        $stmt = $pdo->prepare("SELECT * FROM COURT");
        $stmt->execute();
        
        while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li><a href="genpage_court.php?id='.$ligne['id'].'">'.htmlspecialchars($ligne['nom']) . '</a></li>';
        }
        echo
            '<li>
                <form method="POST" action="php/ajouter_court.php">
                    <input type="text" name="nom" placeholder="Nom du court">
                        <input type="submit" value="Ajouter">
                        </form>
                </li>';

    }
    catch(PDOException $e) {
        echo '<p>Problème PDO</p>';
        echo $e->getMessage();
    }
    $stmt->closeCursor();
    $pdo = null;
}
?>

