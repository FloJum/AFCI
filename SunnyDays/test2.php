<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";
date_default_timezone_set('Europe/Paris');


if (isset($_POST['add_comm'])) {
    if(isset($_POST['commentary']) && !empty($_POST['commentary'])) {
        $comm = protect_montexte(mysqli_real_escape_string($conn, $_POST['commentary']));
        $articleid = $_POST['add_comm'];
        $autorid = $_SESSION['user_id'];
        $datepubli = date('y-m-d h:i:s');
        $sql = "INSERT INTO commentaries (commentary,blog_id,autor_id, datepubli) VALUES ('$comm', '$articleid','$autorid','$datepubli";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        var_dump($result);
        if ($result) {
            mysqli_close($conn);
            $_SESSION['conf_comm'] = $conf_comm = "<p class='error'>Votre commentaire a été posté</p>";
        } else {
            $_SESSION['err_comm'] = $Err_comm = "<p class='error'>Erreur lors de l'ajout du commentaire.</p>";
        }
        
    } else {
       $_SESSION['err_comm'] = $Err_comm = "<p class='error'>Un commentaire vide n'est pas un commentaire</p>";
        }
}
