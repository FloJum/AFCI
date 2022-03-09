<?php
//setcookie("visiteur", "James", time()+24*60*60*365);
$nom = $_COOKIE['visiteur'] ?? "Bond";

echo "<h1>Bon retour parmi nous Mr " . $nom. ".</h1>";
?>
