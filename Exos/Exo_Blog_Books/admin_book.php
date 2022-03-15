<?php

require "../ExoMySQL_books/myincludes/DBlogin.php";
require "indexaction.php";
include "./myincludes/nav.php";

if ($_SESSION['role'] != "admin") {
    header("Location:index.php");
}
$b = "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../Exo_Blog_Books/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />

    <title>Affichage BDD-Books</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="cadre col-8 offset-2 text-center">
                <h3>Modification des utilisateurs :</h3>
                <?php
                $sql = "SELECT * FROM users WHERE role != 'admin'";
                $result = mysqli_query($conn, $sql);
                $liste = mysqli_fetch_all($result, MYSQLI_ASSOC); ?>
                <div class="text-center archive">
                    <?php if (!isset($_POST['select_user'])) : { ?>
                            <?php if (!empty($liste)) : { ?>
                                    <form method="post">
                                        <select name="choixmembre" id="user_select" class="col-12">
                                            <option>--Choisir un membre--</option>
                                            <?php
                                            foreach ($liste as $choice) { ?>
                                                <option value="<?= $choice['id'] ?>"><?= $choice['pseudo'] . " - " . $choice['mail'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <button class='btn btn-sm col-12 archive' type="submit" name="select_user" value="<?= $choice['id'] ?>">Changer infos/membre</button>
                                    </form>
                            <?php }
                            endif; ?>
                            <?php if (isset($_POST['select_user'])) : { ?>
                                    <form method="post" action="indexaction.php">
                                        <div class="form-row mx-0 mt-3">
                                            <label for="pseudo" class="col-4">Pseudo:</label>
                                            <input class="col-6" type="text" id="pseudoinput" name="user_pseudo" value="<?= $Ch_pseudo ?>" />
                                        </div>
                                        <div class="form-row mx-0">
                                            <label for="emailinput" class="col-4">Adresse mail:</label>
                                            <input class="col-6" type="text" id="emailinput" name="user_email" value="<?= $Ch_mail ?>" />
                                        </div>
                                        <div class="form-row mx-0">
                                            <label for="passinput" class="col-4">Mot de passe :</label>
                                            <input class="col-6" type="text" id="passinput" name="user_password" value="<?= $Ch_pass ?>" />
                                        </div>
                                        <div class="form-row mx-0">
                                            <label for="roleinput" class="col-4">Rôle :</label>
                                            <input class="col-6" type="text" id="roleinput" name="user_role" value="<?= $Ch_role ?>" />
                                        </div>
                                        <div class="valide text-center">
                                            <button class='btn btn-sm col-12 archive' type="submit" name="update_user" value="<?= $Ch_id ?>">Mettre à jour l'utilisateur</button>
                                        </div>
                                    </form>
                            <?php }
                            endif; ?>
                        <?php }
                    else : { ?>
                            <p>Aucun membre enregistré !</p>
                    <?php }
                    endif; ?>
                </div>
                <!-- <form method="post" action="indexaction.php">
                    <div class="form-row mx-0 mt-3">
                        <label for="titre" class="col-4">Titre :</label>
                        <input class="col-6" type="text" id="titre" name="book_title" value="<?= $Ch_titre  ?>" />
                    </div>
                    <div class="form-row mx-0">
                        <label for="auteur" class="col-4">Auteur :</label>
                        <input class="col-6" type="text" id="auteur" name="book_autor" value="<?= $Ch_auteur ?>" />
                    </div>
                    <div class="form-row mx-0">
                        <label for="datepub" class="col-4">Date de publication :</label>
                        <input class="col-6" type="date" id="datepub" name="book_date_publi" value="<?= $Ch_datepubli ?>" />
                    </div>
                    <div class="form-row mx-0">
                                <label for="price" class="col-4">Prix :</label>
                                <input class="col-6" type="text" id="price" name="book_price" value="<?= $Ch_prix ?>" />
                            </div>
                    <div class="valide text-center">
                        <?php if (isset($_POST['update'])) : { ?>
                                <button class='btn btn-warning btn-sm col-8 offset-1' type="submit" name="upbook" value="<?= $Ch_id ?>">Modifier un livre</button><br>
                            <?php }
                        else : { ?>
                                <button class='btn btn-success btn-sm col-8 offset-1' type="submit" name="insert">Ajouter un livre</button><br>
                        <?php }
                        endif; ?>
                    </div>
                </form>

            </div>
            <div class="cadre col-6 text-center">
                <form method="post" action="indexaction.php">
                    <div class="form-row mt-3">
                        <button class='btn btn-sm col-6 archive' type="submit" name="all_archived">Archiver la collection</button>
                    </div>
                </form>
                <form method="post">
                    <div class="form-row mx-0 archive">
                        <button class='btn btn-sm col-6 archive' type="submit" name="unarchived">Désarchiver des livres</button>
                    </div>
                </form>
                <?php if (isset($_POST['unarchived'])) : {
                        $sql = "SELECT * FROM books WHERE isarchived=true";
                        $result = mysqli_query($conn, $sql);
                        $archive = mysqli_fetch_all($result, MYSQLI_ASSOC); ?>
                        <div class="text-center">
                            <?php if (!empty($archive)) : { ?>
                                    <form method="post" action="indexaction.php" class="archive">
                                        <select name="choixlivre" id="book_select" class="col-12">
                                            <option>--Choisir un livre--</option>
                                            <?php
                                            foreach ($archive as $choice) { ?>
                                                <option value="<?= $choice['id'] ?>"><?= $choice['titre'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <button class='btn btn-sm col-12 archive' type="submit" name="unarchivedbook" value="<?= $choice['id'] ?>">Désarchiver le livre</button>
                                    </form>
                                <?php }
                            else : { ?>
                                    <p>Aucun livre archivé !</p>
                            <?php }
                            endif; ?>
                        </div>
                <?php }
                endif ?>
            </div>

            <div class="entete text-center col-12">
                <div class="row">
                    <h4 class="col-11">Nombre de livres : <?= $nbreLivres  ?> </h4>
                    <h6 class="col-1">(<?= $nbreLivresArch ?> archivés)</h6>
                </div>
            </div>

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
            </table> -->
            </div>
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>