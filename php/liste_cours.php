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
                        <select class="niveau" id="id_niveau" name="niveau">
                            <option value="1">L1</option>
                            <option value="2">L2</option>
                            <option value="3">L3</option>
                            <option value="4">L4</option>
                            <option value="5">L5</option>
                            <option value="6">L6</option>
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

