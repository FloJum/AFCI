<?php
include "DBlogin.php";

if(isset($_POST['upbook'])) {
    $id=$_POST['upbook'];
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $sql = "UPDATE books SET titre='$titre',auteur='$auteur',datepub='$datepubli' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo $id; echo $titre;
    header('Location: index.php');
}


