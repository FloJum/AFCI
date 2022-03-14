<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "book";
$dblog = "user";

$conn = mysqli_connect($host,$user,$pass,$db);
$log = mysqli_connect($host,$user,$pass,$dblog);

if (mysqli_connect_error($conn)) {
    die ("Connexion échouée");
}
if (mysqli_connect_error($log)) {
    die ("Connexion échouée");
}

?>