<?php

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "sunnydays";

$host = "wolfsnakuyflo.mysql.db";
$user = "wolfsnakuyflo";
$pass = "FoxH0undOh";
$db = "wolfsnakuyflo";

$conn = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_error($conn)) {
    die ("Connexion échouée");
}

?>