<?php
include "DBlogin.php";
if(isset($_POST['insert'])) {
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

?>
