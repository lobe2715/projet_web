<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Résultats</title>
</head>
<body>
<?php 
session_start(); // Démarrer la session
if (isset($_POST['Mail']) && isset($_POST['Mdp'])) {
    include("connex.inc.php");
    $pdo = connexion('gs05790v');
    try {
        $mon_adresse = $_POST['Mail'];
        $mon_mdp = $_POST['Mdp'];
        $req = $pdo->prepare("SELECT * FROM PROFILS WHERE adresse = :adresse");
        $req->execute([':adresse' => $mon_adresse]);
        $user = $req->fetch(PDO::FETCH_ASSOC);
        if (password_verify($mon_mdp, $user['mdp'])) {
            $_SESSION['user_email'] = $user['adresse'];
            $_SESSION['user_prenoml'] = $user['prenom'];
            $_SESSION['user_nom'] = $user['nom'];
            $_SESSION['user_rang'] = $user['rang'];
            echo "Mot de passe correct";
            header('location:../accueil.php');
              exit();
        } else {
            echo "Adresse e-mail ou mot de passe incorrect";
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
</body>
</html>


