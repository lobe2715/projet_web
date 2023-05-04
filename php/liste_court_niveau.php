<?php
function liste_niveau_cours($pdo){
    try{
        $stmt = $pdo->prepare("SHOW COLUMNS FROM COURT LIKE 'classe'");
        $stmt->execute();
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);    
        preg_match_all("/'([^']+)'/", $ligne['Type'], $matches);
        $res = array();
        if(isset($matches[1])){
            $res = $matches[1];
        }
        foreach($res as $resultats){
            echo '<li><a href="page_de_court.php?classe='.$resultats['classe'].'">'.'cours de L'.htmlspecialchars($resultats['nom']).'</a></li>';
        }
    }
    catch(PDOException $e) {
        echo '<p>Problème PDO</p>';
        echo $e->getMessage();
    }
    $stmt->closeCursor();
    $pdo = null;
}
?>
