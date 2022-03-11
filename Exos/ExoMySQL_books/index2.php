<?php

require "../ExoMySQL_books/myincludes/DBlogin.php";
require "indexaction.php";
$b = "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />

    <title>Affichage BDD-Books</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php if (!isset($_POST['update'])) : { ?>
                    <div class="cadre col-6 text-center">
                        <form method="post" action="indexaction.php">
                            <div class="form-row mx-0 mt-1">
                                <label for="titre" class="col-2 offset-1">Titre :</label>
                                <input class="col-6" type="text" id="titre" name="book_title" />
                            </div>
                            <div class="form-row mx-0">
                                <label for="auteur" class="col-2 offset-1">Auteur :</label>
                                <input class="col-6" type="text" id="auteur" name="book_autor" />
                            </div>
                            <div class="form-row mx-0">
                                <label for="datepub" class="col-2 offset-1">Datepubli :</label>
                                <input class="col-6" type="text" id="datepub" name="book_date_publi" />
                            </div>
                            <div class="text-center">
                                <button class='btn btn-success col-8 offset-1' type="submit" name="insert">Ajouter un livre</button><br>
                            </div>
                        </form>
                    </div>
                <?php }
            else : { ?>
                    <?php $sql = "SELECT * FROM books WHERE id=$_POST[update] ";
                    $upbook = mysqli_query($conn, $sql);
                    foreach ($upbook as $val) { ?>
                        <div class="cadre col-6 text-center">
                            <form method="post" action="indexaction.php" class="">
                                <div class="form-row mx-0 mt-1">
                                    <label for="titre" class="col-2 offset-1">Titre :</label>
                                    <input class="col-6" type="text" id="titre" name="book_title" value="<?= $val['titre'] ?>" />
                                </div>
                                <div class="form-row mx-0">
                                    <label for="auteur" class="col-2 offset-1">Auteur :</label>
                                    <input class="col-6" type="text" id="auteur" name="book_autor" value="<?= $val['auteur'] ?>" />
                                </div>
                                <div class="form-row mx-0">
                                    <label for="datepub" class="col-2 offset-1">Datepubli :</label>
                                    <input class="col-6" type="text" id="datepub" name="book_date_publi" value="<?= $val['datepub'] ?>" />
                                </div>
                                <div class="text-center">
                                    <button class='btn btn-warning col-8 offset-1' type="submit" name="upbook" value="<?= $val['id'] ?>">Modifier un livre</button><br>
                                </div>
                            </form>
                        </div>
            <?php }
                }
            endif ?>
            <div class="cadre col-6 text-center">
                <form method="post" action="indexaction.php">
                    <div class="form-row mt-3">
                        <button class='btn btn-sm btn-primary col-4' type="submit" name="unarch">Désarchiver la collection</button>
                        <button class='btn btn-sm btn-secondary col-4 offset-2' type="submit" name="all_archived">Archiver la collection</button>
                    </div>
                </form>
                <form method="post">
                    <div class="form-row mx-0 mt-3 archive">
                        <button class='btn btn-sm btn-info col-5' type="submit" name="unarchived">Désarchiver des livres</button>
                    </div>
                </form>
                <?php if (isset($_POST['unarchived'])) : { ?>
                        <form method="post" action="indexaction.php" class="archive col-6 offset-3">
                            <select name="choixlivre" id="book_select" class="form-select form-select-sm text-center">
                                <option>--Choisir un livre--</option>
                                <?php $sql = "SELECT * FROM books WHERE isarchived=1";
                                $result = mysqli_query($conn, $sql);
                                $archive = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                foreach ($archive as $choice) { ?>
                                    <option value="<?= $choice['id'] ?>"><?= $choice['titre'] ?></option>
                                <?php } ?>
                            </select>
                            <button class='btn btn-sm col-8 offset-1 archive' type="submit" name="unarchivedbook" value="<?= $choice['id'] ?>">Désarchiver</button>
                        </form>
                <?php }
                endif ?>
            </div>

            <h4>Nombre de livres : <?= $nbreLivres  ?></h4>
            <a href="index.php">index</a>

            <table class="text-center">
                <tr class="col-12">
                    <th class="col-1">Numéro</th>
                    <th class="col-3">Titre</th>
                    <th class="col-2">Auteur</th>
                    <th class="col-2">Date de publication</th>
                    <th class="col-1">Archivé</th>
                    <th class="col-4">Actions</th>
                </tr>
                <?php foreach ($all as $book) {
                    if ($book['isarchived'] == 0) : { ?>
                            <tr class="col-12 ">
                                <td class="col-1"><?= $book['id'] ?></td>
                                <td class="col-3"><?= $book['titre'] ?></td>
                                <td class="col-2"><?= $book['auteur'] ?></td>
                                <td class="col-2"><?= $book['datepub'] ?></td>
                                <td class="col-1"><?= $book['isarchived'] ?></td>
                                <td class="col-4">
                                    <div class="BtnList row ">
                                        <form method="post" class="col-4">
                                            <button class='btn btn-info btn-sm col-10 justify-content-center' type="submit" name="update" value="<?= $book['id'] ?>">Editer </button>
                                        </form>
                                        <form action="indexaction.php" method="post" class="col-4">
                                            <button class='btn btn-secondary btn-sm col-10' type="submit" name="archive" value="<?= $book['id'] ?>">Archiver</button>
                                        </form>
                                        <form action="indexaction.php" method="post" class="col-4">
                                            <button class='btn btn-danger btn-sm col-10' type="submit" name="delete" value="<?= $book['id'] ?>">Supprimer</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                <?php }
                    endif;
                } ?>
            </table>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
    body {
        background-color: #00203FFF;
        color: #ADEFD1FF;
    }

    .cadre {
        background-color: #ADEFD1FF;
        color: #00203FFF;
        border-radius: 20px;
        margin: 20px 0px;
        border: 1px solid #00203FFF;
    }

    label {
        display: block;
    }

    .archive {
        margin-top: 10px;
    }

    select {
        background-color: #00203FFF !important;
        color: #ADEFD1FF !important;
    }

    h4 {
        padding: 20px 0px;
        text-align: center;
        border: 1px solid #ADEFD1FF;
        border-radius: 15px;
        margin-bottom: 40px;
    }

    tr {
        border: 1px solid #00203FFF;
    }

    th {
        padding: 15px 0px;
        border: 1px solid #ADEFD1FF;
    }

    td {
        padding: 15px 0px;
        background-color: #ADEFD1FF;
        color: #00203FFF;
    }

    .BtnList form {
        margin-top: 20px;
    }
</style>