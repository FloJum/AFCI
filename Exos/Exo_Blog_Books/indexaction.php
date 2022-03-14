<?php
session_start();
include "../ExoMySQL_books/myincludes/DBlogin.php";
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
$nbreLivres = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
$sql = "SELECT * FROM books WHERE isarchived=1";
$result = mysqli_query($conn, $sql);
$nbreLivresArch = mysqli_num_rows($result);
mysqli_free_result($result);

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
    header('Location: admin_book.php');
}

// SUPPRIMER LIVRE
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: admin_book.php');
}
// FORMULAIRE UPDATE 
$Ch_titre = $Ch_auteur = $Ch_datepubli = "";
if (isset($_POST['update'])) {
    $sql = "SELECT * FROM books WHERE id=$_POST[update]";
    $upbook = mysqli_query($conn, $sql);
    foreach ($upbook as $val) {
        $Ch_titre = $val['titre'];
        $Ch_auteur = $val['auteur'];
        $Ch_datepubli = $val['datepub'];
        $Ch_id = $val['id'];
    }
    mysqli_free_result($upbook);
    mysqli_close($conn);
};

//MODIFIER LIVRE
if (isset($_POST['upbook'])) {
    $id = $_POST['upbook'];
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $sql = "UPDATE books SET titre='$titre',auteur='$auteur',datepub='$datepubli' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $Btn = "Ajouter un livre";
    $Ch_titre = $Ch_auteur = $Ch_datepubli = "";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: admin_book.php');
}

// ARCHIVER/DESARCHIVER 
if (isset($_POST['all_archived'])) {
    $sql = "UPDATE books SET isarchived=1";
    $result = mysqli_query($conn, $sql);
    $Archiv = "all_archived";
    mysqli_close($conn);
    header('Location: admin_book.php');
}

if (isset($_POST['unarch'])) {
    $sql = "UPDATE books SET isarchived=0";
    $result = mysqli_query($conn, $sql);
    $Archiv = "unarch";
    mysqli_close($conn);
    header('Location: admin_book.php');
}

if (isset($_POST['archive'])) {
    $id = $_POST['archive'];
    $sql = "UPDATE books SET isarchived=1 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: admin_book.php');
}
if (isset($_POST['unarchivedbook'])) {
    $id = $_POST['choixlivre'];
    $sql = "UPDATE books SET isarchived=0 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: admin_book.php');
}


// COMMANDER 
if(isset($_POST['commander'])) {
    $sql = "SELECT * FROM books WHERE id=$_POST[commander]";
    $upbook = mysqli_query($conn, $sql);
    foreach ($upbook as $val) {
        $Ch_titre = $val['titre'];
        $Ch_auteur = $val['auteur'];
        $Ch_datepubli = $val['datepub'];
        $Ch_id = $val['id'];
        $Ch_prix = $val['prix'];
    }
    // header('Location: commande.php');
}

// CREATION COMPTE
if(isset($_POST['Register'])) {
    $pseudo = $_POST['user_pseudo'];
    $mail = $_POST['user_email'];
    $password = $_POST['user_password'];
    $role = "visiteur";
    $sql = "INSERT INTO member (mail,password,pseudo,role) 
                        VALUES ('$mail','$password','$pseudo','$role')";
    $result = mysqli_query($conn, $sql);
}