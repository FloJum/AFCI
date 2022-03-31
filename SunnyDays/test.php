<?php
include "./myincludes/DBlogin.php";
if (isset($_POST['newsinscr'])) {
    if (isset($_POST['mailnewsinscr']) && !empty($_POST['mailnewsinscr'])) {
        $newsemail = protect_montexte(mysqli_real_escape_string($conn, $_POST['mailnewsincr']));
        echo"ici";
        if (!filter_var($newsemail, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Le format de l'adresse email est invalide.";
            echo"ou ici";
        } else {
            $dateinscr = date('y-m-d h:i:s');
            $sql = "SELECT * FROM newsletter WHERE email LIKE '$newsemail'";
            $result = mysqli_query($conn, $sql);
            echo"par ici";
            if (mysqli_num_rows($req) > 0) {
                $Err_news_add = "Vous êtes déjà inscrit à la newsletter";
            } else {
                $sql = "INSERT INTO newsletter (email, date_inscription) VALUES ('$newsemail','$dateinscr')";
                $result = mysqli_query($conn, $sql);
                if (mysqli_query($conn, $sql)) {
                    mysqli_free_result($newsinscr);
                    mysqli_close($conn);
                    $Conf_news_inscr = "Vous êtes désormais inscrit à la newsletter";
                    header('Location: Blog.php');
                } else {
                    $Err_news_add = "Nous n'avons pas pu vous inscrire.";
                }
            }
        }
    } else {
        $Err_news_add = "Tous les champs doivent être remplis !";
    }
}

var_dump($_POST['newsinscr']);
var_dump($_POST['mailnewsinscr']);
var_dump($emailErr);
var_dump($Err_news_add);
var_dump($result);
var_dump($newsinscr);
?>