<?php
include "../ExoMySQL_books/myincludes/DBlogin.php";

// AJOUTER  LIVRE
if (isset($_POST['insert'])) {
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $isarchived = "0";
    $sql = "INSERT INTO books (titre,auteur,datepub,isarchived) 
                        VALUES ('$titre','$auteur','$datepubli','$isarchived')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: index.php');
}

// SUPPRIMER LIVRE
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: index.php');
}

//MODIFIER LIVRE
if (isset($_POST['upbook'])) {
    $id = $_POST['upbook'];
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $sql = "UPDATE books SET titre='$titre',auteur='$auteur',datepub='$datepubli' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo $id;
    echo $titre;
    header('Location: index.php');
}

// ARCHIVER/DESARCHIVER 
if (isset($_POST['all_archived'])) {
    $sql = "UPDATE books SET isarchived=1";
    $result = mysqli_query($conn, $sql);
    $Archiv = "all_archived";
    mysqli_close($conn);
    header('Location: index.php');
}

if (isset($_POST['unarch'])) {
    $sql = "UPDATE books SET isarchived=0";
    $result = mysqli_query($conn, $sql);
    $Archiv = "unarch";
    mysqli_close($conn);
    header('Location: index.php');
}

if (isset($_POST['archive'])) {
    $id = $_POST['archive'];
    $sql = "UPDATE books SET isarchived=1 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: index.php');
}
if (isset($_POST['unarchivedbook'])) {
    $id = $_POST['unarchivedbook'];
    $sql = "UPDATE books SET isarchived=0 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: index.php');
}

