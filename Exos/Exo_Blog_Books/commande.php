<?php
require "indexaction.php";
include "./myincludes/nav.php";
// if(!isset($_SESSION['role'])) {
//     header("Location : index.php?");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <title>Commande</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <form action="" method="post" class="formulaire p-0 col-12">
                <div class="row align-items-baseline" id="formcont">
                    <h3 class="col-12 text-center pr-0">Panier :</h3>
                </div>
                <?php if (isset($Ch_titre) && !empty($Ch_titre)) : { ?>
                        <table class="col-12 text-center">
                            <tr class="col-12">
                                <th class="col-3">Titre</th>
                                <th class="col-2">Auteur</th>
                                <th class="col-2">Date de publication</th>
                                <th class="col-2">Prix</th>
                            </tr>
                            <tr class="col-12 ">
                                <td class="col-3"><?= $Ch_titre ?></td>
                                <td class="col-3"><?= $Ch_auteur ?></td>
                                <td class="col-3"><?= $Ch_datepubli ?></td>
                                <td class="col-3"><?= $Ch_prix ?> €</td>
                            </tr>
                        </table>
                        <div class="row text-center mx-0 m-4 ">
                            <input type="submit" name="btnsubmit" value="Commander" class="col-2 offset-5">
                        </div>
                    <?php }
                else : { ?>
                        <h4 class="text-center m-3">Votre panier est vide.</h4>
                        <div class="cadrelivre col-12 text-center">
                            <a class="btn btn-lg btnlivre" href="livres.php">Voir notre collection</a>
                        </div>
                <?php }
                endif; ?>

            </form>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    /****************************************** FORMULAIRE ************************************/
    .formulaire {
        background-color: #ADEFD1FF;
        color: #00203FFF;
        border-radius: 20px;
        margin: 20px 0px;
        border: 1px solid #00203FFF;
    }

    h3 {
        padding: 20px 0px;
    }

    th {
        padding: 15px 0px;
        border: 1px solid #ADEFD1FF;
        background-color: #00203FFF;
        color: #ADEFD1FF;
    }

    input[type="submit"] {
        background-color: #32936f !important;
        color: whitesmoke;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #32936f !important;
    }

    input[type="submit"]:hover {
        background-color: whitesmoke !important;
        color: #32936f;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #32936f !important;
    }

    .cadrelivre {
        text-align: center;
        align-self: center;
        height: 300px;
        border-radius: 20px ;
        background: linear-gradient(rgba(8, 17, 20, 0.75), rgba(8, 17, 20, 0.75)),
            url("./img/livre.jpg") no-repeat center/cover;
    }

    .btnlivre {
        margin-top: 150px;
        background-color: #00203FFF;
        color: #ADEFD1FF;
        border: 1px solid #ADEFD1FF;
    }

    .btnlivre:hover {
        color: #00203FFF;
        background-color:#ADEFD1FF;
    }
</style>