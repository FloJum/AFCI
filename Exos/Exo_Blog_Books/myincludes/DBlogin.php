<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "books";

$conn = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error($conn)) {
    die ("Connexion échouée");
}

?>