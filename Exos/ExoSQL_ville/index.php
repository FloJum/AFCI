<?php

require "DBlogin.php";
$b = "<br>";

$sql = "SELECT * FROM lpecom_livres";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}
echo "<h3><strong>Requête 2 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_livres WHERE prix > 20";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}
echo "<h3><strong>Requête 3 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_livres ORDER BY prix DESC";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}
echo "<h3><strong>Requête 4 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT id_livre, titre, auteur, MAX(prix) FROM lpecom_livres";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_row($result);
echo "Le  livre le plus cher est $all[1] de $all[2] qui coûte $all[3]";

echo "<h3><strong>Requête 5 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_livres WHERE prix BETWEEN 20 AND 22";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}
echo "<h3><strong>Requête 6 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_livres WHERE isbn_10 NOT LIKE 2092589547 ";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}
echo "<h3><strong>Requête 7 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT MIN(prix) as Minus FROM lpecom_livres";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_array($result, MYSQLI_ASSOC);
foreach ($all as $k => $book)
echo $k." = ".$book;

echo "<h3><strong>Requête 8 de l'exercice : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_livres LIMIT 3 OFFSET 1 ";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}

echo "<h3><strong>Requête 1 de l'exercice II : </strong></h3>" . $b;
$sql = "SELECT * FROM lpecom_etudiants INNER JOIN lpecom_examens ON lpecom_etudiants.id_etudiant = lpecom_examens. ";
$result = mysqli_query($conn, $sql);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($all as $book) {
    echo $book['id_livre'] . " " . $book['titre'] . $b;
    echo $book['isbn_10'] . $b;
    echo $book['auteur'] . $b;
    echo $book['prix'] . " €" . $b . $b;
}












?>


<!-- https://aymeric-auberton.fr/academie/mysql/exercices#exercices-mysql-1 -->