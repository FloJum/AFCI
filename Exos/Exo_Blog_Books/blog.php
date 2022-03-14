<?php
session_start();
include "./myincludes/nav.php";
require_once "./myincludes/blog_data_alt.php";

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
    <title>Blog</title>
</head>

<body onload="checkCookie();">
    <h3 class="col-12 text-center">Retrouvez tous nos articles sur ce blog :</h1>
    <div class="container">
        <div class="row">
            <?php $tab = $tmpArray;
            foreach ($tab as $key => $val) { ?>
                <div class="col-8 offset-2">
                    <table class="table border border-3 border-secondary">
                        <tr class="text-center col-12">
                            <th class="col-9"><?= $val[0] ?></td>
                            <td class="col-3">Publié le : <?= $val[1] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Écrit par : <i><?= $val[2] ?></i></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= $val[3] ?>
                        <tr class="text-end">
                            <td colspan="2"> <a href="article.php?id=<?= $key ?>">Lire la suite...</a></td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
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
    td{
        color:#00203FFF !important;
    }
</style>