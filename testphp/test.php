<?php
/*Inclusion du fich*/
include('connex.inc.php');
include('create.php');

/*connexion a ma base*/
$pdo = connexion('gs05790v');
create($pdo);
?>
