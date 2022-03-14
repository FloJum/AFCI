<?php
session_start();

include "./myincludes/nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/custom.css" />
    <link rel="stylesheet" href="" id="Style_Pref"/>
    <title>Accueil</title>
</head>

<body onload="checkCookie();">
    <div class="accueil">
        <div class="row">
            <h1 class="col-12 text-center">Bienvenue.</h1>
            <p class="col-8 offset-2">Ceci est la page d'accueil de mon site. Saviez-vous que vous pouvez changer le thème des pages en cliquant sur l'un des boutons ci-dessous ? :</p>
            <form  class="col-6 offset-3 text-center">
                <button name="noel" onclick="setStyle('./css/noel.css');">Noël </button>
                <button name="paques" onclick="setStyle('./css/paques.css');">Pâques</button>
            </form>
            <p><?php  echo isset($_SESSION['role'])?></p>
        </div>
    </div>
    <script src="./js/fonctions.js"></script>
</body>

</html>