<?php
session_start();
include "./myincludes/nav.php";
require_once "./myincludes/blog_data_alt.php";
$key = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <link rel="stylesheet" href="" id="Style_Pref" />
    <title>Document</title>
</head>

<body onload="checkCookie();">
    <h3 class="col-12 text-center">Article n° <?= $key?></h1>
        <div class="container">
            <div class="row">
                <?php $tab = $tmpArray[$key] ?>
                    <div class="col-8 offset-2">
                        <table class="table border border-3 border-secondary">
                            <tr class="text-center col-12">
                                <th class="col-9"><?= $tab[0] ?></td>
                                <td class="col-3">Publié le : <?= $tab[1] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Écrit par : <i><?= $tab[2] ?></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><?= $tab[4] ?>
                            <tr class="text-end">
                                <td colspan="2"> <a href="blog.php">Revenir à la liste des articles.</a></td>
                            </tr>
                        </table>
                    </div>
            
            </div>
        </div>
        <script src="./js/fonctions.js"></script>
</body>

</html>

<style>
    h1 {
        margin-top: 40px;
    }

    table {
        margin-top: 20px;
    }
</style>