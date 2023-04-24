<?php
require_once('session.php'); // inclure le fichier session.php pour initialiser la session
if (isset($_SESSION['resultats'])) {
    $resultats = $_SESSION['resultats'];
    // faire quelque chose avec les résultats
} else {
    echo "Pas de résultats trouvés";
}
?>
