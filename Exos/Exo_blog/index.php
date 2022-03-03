<?php
if (!empty ($_COOKIE['user'])){
    $User2 = $_COOKIE['user'];
    header("Location:accueil.php");
} else {
    header("Location:./myincludes/login.php");
}
?>