<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

//ouvrir la connexion

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {
    die("connexion échouée");
} else {
    echo "connexion ok";
}


//  traitement et code

mysqli_close($conn);

?>