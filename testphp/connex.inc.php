<?php
function connexion($base)
{
    include_once("param.inc.php");
    try {
        $pdo = new PDO('mysql:host='.HOTE.';dbname='.$base, UTILISATEUR, PASSE);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo 'Probleme a la connexion';
        die();
    }
    return $pdo;

}
?>
