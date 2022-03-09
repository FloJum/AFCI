<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "books";

$conn = mysqli_connect($host,$user,$pass,$db);

$titre = $_POST["book_title"];
$auteur = $_POST["book_autor"];
$datepubli = $_POST["book_date_publi"];
$isarchived = "0";
$sql = "INSERT INTO books (titre,auteur,datepub,isarchived) 
        VALUES ('$titre','$auteur','$datepubli','$isarchived')";
mysqli_close($conn);
header('Location: affichageDB.php');
?>