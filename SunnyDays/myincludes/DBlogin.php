<?php

$host = "wolfsnakuyflo.mysql.db";
$user = "wolfsnakuyflo";
$pass = "FoxH0undOh";
$db = "wolfsnakuyflo";

$conn = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error($conn)) {
    echo"Impossible de se  connecter à la base de données";
    die ("Connexion échouée");
    
}

?>