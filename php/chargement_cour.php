<?php

function chargement_court($id_court){
    include("connex.inc.php");
    $pdo = connexion('gs05790v');

    try {
        $req = $pdo->prepare("SELECT * FROM ELEMENT WHERE id_court = :id_court ORDER BY id_element ASC");
        $req->execute([':id_court' => $mon_id_court]);
        // Affichage des éléments
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            $type = $res['type'];
            $contenu = $res['contenu'];
            if ($type == "texte") {
                echo "<p>$contenu</p>";
            }
            elseif ($type == "image") {
                echo "<img src='$contenu'>";
            }
            elseif($type == "titre"){
                echo "<h2>'$contenu'</h2>";
            }
            elseif ($type == "audio") {
                echo "<audio src='$contenu' controls> le navigateur ne supporte pas l'audio</audio>";
            }
            
            
        }
        $req->closeCursor();
        $pdo = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        echo '<p>Problème avec la base</p>';
    }
}
?>


