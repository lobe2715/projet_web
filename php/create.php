<?php
function create($pdo) {
    /*creation de la table*/
    $table = "CREATE TABLE IF NOT EXISTS PROFILS (
        id INT AUTO_INCREMENT,
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        identifiant VARCHAR(255) NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        mdp VARCHAR(255) NOT NULL,
        tel  VARCHAR(255) NOT NULL,
        classe ENUM('1','2','3','4','5','6'),
        rang ENUM('0','1','2'),
        CONSTRAINT PRIMARY KEY (id)
    )";
    $pdo->exec($table);
}

?>
