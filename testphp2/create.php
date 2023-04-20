<?php
function create($pdo) {
    /*creation de la table*/
    $table = "CREATE TABLE IF NOT EXISTS etudiant (
        id INT AUTO_INCREMENT,
        nom VARCHAR(255) NOT NULL,
        filiere ENUM('L1','L2','L3'),
        age INT NOT NULL,
        CONSTRAINT PRIMARY KEY (id)
    )";
    $pdo->exec($table);
}

?>
