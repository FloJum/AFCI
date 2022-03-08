<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "books";

$conn = mysqli_connect($host,$user,$pass,$db);

$titre = $_POST["book_title"];
$auteur = $_POST["book_autor"];
$datepubli = $_POST["book_date_publi"];
$isarchived = "";
$sql = "INSERT INTO books (titre,auteur,datepub,isarchived) VALUES ($titre,$auteur,$datepubli,$isarchived)";

if (mysqli_query($conn, $sql)) {
    echo "insertion réalisée <br>";
} else {
    echo "problème lors de l'insertion...<br>";
}
?>

<a href="affichageDB.php ">Retour au formulaire</a>