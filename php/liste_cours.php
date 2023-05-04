<?php

function liste_cours($pdo, $classe){
    try{
        $stmt = $pdo->prepare("SELECT * FROM COURT WHERE classe = :classe");
        $stmt->bindParam(':classe', $classe);
        $stmt->execute();
        echo '<div class="g1">';
        echo '<ul>';
        while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li><a href="genpage_court.php?id='.$ligne['id'].'">'.htmlspecialchars($ligne['nom']).'</a></li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '<div class="g2">';
        
        echo ' </div>';

        echo '<div class="g3">';
        echo 'test3';
        echo '
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
                        </form>';
        echo '</div>';
    }
    catch(PDOException $e) {
        echo '<p>Problème PDO</p>';
        echo $e->getMessage();
    }
    $stmt->closeCursor();
    $pdo = null;
}
?>

