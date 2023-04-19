<?php
define("HOTE","webetu.univ-st-etienne.fr");
define("UTILISATEUR","gs05790v");
define("BASE","gs05790v");
define("PASSE","CH9LF7BW");

ini_set("display_errors", "1");
error_reporting(E_ALL);
try {
    echo 'connexion reussie';
    $pdo = new PDO('mysql:host='.HOTE.';dbname='.BASE, UTILISATEUR, PASSE);
    $test ="CREATE TABLE utilisateur ( id INT PRIMARY KEY NOT NULL);
";
    /*$test ="Insert into membre ( pseudo, mdp , statut ) values ( 'test','123' ,1 )" ;*/
    $tt = $pdo->query($test);
} catch(PDOException $e) {
    echo "echec a bdd";
    echo $e->getMessage();
}
?>