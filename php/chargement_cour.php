<?php

function chargement_court($pdo,$mon_id_court){
    try {
        
        $req = $pdo->prepare("SELECT * FROM ELEMENT WHERE id_court = :id_court ORDER BY id ASC");
        $req->execute([':id_court' => $mon_id_court]);
        // Affichage des éléments
        while ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            $type = $res['type'];
            $contenu = $res['contenu'];
            $id_element = $res['id'];
            if ($type == "texte") {
                $texte = wordwrap($contenu, 60, "\n", true);
                echo "<p>$texte</p>";
            }
            elseif ($type == "image") {
                echo "<img class='image-auto' src=$contenu>";
            }
            elseif($type == "titre"){
                echo "<h2>$contenu</h2>";
            }
            elseif ($type == "audio") {
                echo "<audio src='$contenu' controls> le navigateur ne supporte pas l'audio</audio>";
            }
            echo "<form method=\"POST\" action=\"php/supprimer_element.php\">";
            echo "<input type=\"hidden\" name=\"id_element\" value=$id_element>";
            echo "<input type=\"hidden\" name=\"mon_id_court\" value=$mon_id_court>";
            echo "<input type=\"submit\" value=\"Supprimer\">";
            echo "</form>";
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


