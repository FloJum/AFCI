<?php

require "DBlogin.php";

$sql = "SELECT * FROM lpecom_livres";
$result = mysqli_query($conn, $sql);
$nbreLivres = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
$b = "<br>";

foreach ($all as $book){
    echo$book['id_livre']." ".$book['titre'].$b;
    echo$book['isbn_10'].$b;
    echo$book['auteur'].$b;
    echo$book['prix']." €".$b.$b;
    

}
?>


<!-- https://aymeric-auberton.fr/academie/mysql/exercices#exercices-mysql-1 -->