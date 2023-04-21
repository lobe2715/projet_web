<?php
function create($pdo) {
    /*creation de la table*/
    $table = "CREATE TABLE IF NOT EXISTS PROFILS (
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        mdp VARCHAR(255) NOT NULL,
        tel  VARCHAR(255) NOT NULL,
        classe ENUM('1','2','3','4','5','6'),
        rang ENUM('0','1','2'),
        CONSTRAINT PRIMARY KEY (adresse)
    )";
    $pdo->exec($table);
}
?>
