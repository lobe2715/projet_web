<?php
function index_des_cours($pdo,$nb_classe){
    try{
        $stmt = $pdo->prepare("SELECT * FROM COURT where :classe");
        $stmt->bindParam(':classe', $nb_classe);
        $stmt->execute();
        while ($resultats = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li><a href="page_de_court.php?id='.$resultats['id'].'">'.htmlspecialchars($resultats['nom']).'</a></li>';
        }
        $resultats->closeCursor();
        $pdo = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        echo '<p>Problème avec la base</p>';
        
    }
}
?>
