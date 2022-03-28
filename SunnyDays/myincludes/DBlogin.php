<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sunnydays";

$conn = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error($conn)) {
    die ("Connexion échouée");
}

?>