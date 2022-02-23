<?php

$nom = $_GET['nom'] ?? 'inconnu';
$ville = $_GET['ville'] ??  'fantasy town';

echo "hello. je m'appelle " . $nom . " et je vis à " . $ville;
