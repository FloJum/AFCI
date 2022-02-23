<?php

if(isset($_GET['nom']))
    $nom = $_GET['nom'];
else
    $nom = "inconnu";

if (isset($_GET['ville']))
    $ville = $_GET['ville'];
else 
    $ville = 'fantasy town';    


echo "hello. je m'appelle " . $nom . " et je vis à " . $ville;
