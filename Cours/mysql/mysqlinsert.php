<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {
    die("connexion échouée");
} else {
    echo "connexion ok <br>";
}

// INSERT

$utilisateur ="Rex";
$password ="chien";

$utilisateur = mysqli_real_escape_string($conn,$utilisateur);

$sql = "insert into user (utilisateur, password) values('$utilisateur','$password')";

if (mysqli_query($conn,$sql))  {
    echo "insertion réalisée <br>";
} else {
    echo "problème lors de l'insertion...<br>";
}


if(mysqli_close($conn)) {
    echo " <br>BDD fermée <br>";
}
?>