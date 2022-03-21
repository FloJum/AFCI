<?php

require "../ExoMySQL_books/myincludes/DBlogin.php";
require "indexaction.php";
include "./myincludes/nav.php";

if ($_SESSION['role'] != '["admin"]') {
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
            <div class="cadre col-8 mx-auto text-center">
                <h3>Modification des utilisateurs :</h3>
                <?php $conn = mysqli_connect($host, $user, $pass, $db);
                $role = '["membre"]';
                $sql = "SELECT * FROM users WHERE role LIKE '$role'";
                $result = mysqli_query($conn, $sql);
                $liste = mysqli_fetch_all($result, MYSQLI_ASSOC); ?>
                <div class="text-center archive">
                    <?php if (!empty($liste)) : { ?>
                            <form method="post">
                                <select name="user_select" id="user_select" class="col-12">
                                    <option>--Choisir un membre--</option>
                                    <?php
                                    foreach ($liste as $choice) { ?>
                                        <option value="<?= $choice['id'] ?>"><?= $choice['pseudo'] . " - " . $choice['mail'] ?></option>
                                    <?php } ?>
                                </select>
                                <button class='btn btn-sm col-12 archive' type="submit" name="select_user" value="select_user">Changer infos/membre</button>
                            </form>
                        <?php }
                    else : { ?>
                            <p>Aucun membre enregistré !</p>
                    <?php }
                    endif; ?>
                    <?php if (isset($_POST['select_user'])) : { ?>
                            <form method="post" action="indexaction.php">
                                <!-- <div class="form-row mx-0 mt-3">
                                    <label for="pseudo" class="col-4">Pseudo:</label>
                                    <input class="col-6" type="text" id="pseudoinput" name="user_pseudo" value="<?= $Ch_pseudo ?>" />
                                </div>
                                <div class="form-row mx-0">
                                    <label for="emailinput" class="col-4">Adresse mail:</label>
                                    <input class="col-6" type="text" id="emailinput" name="user_email" value="<?= $Ch_mail ?>" />
                                </div>
                                <div class="form-row mx-0">
                                    <label for="roleinput" class="col-4">Rôle :</label>
                                    <input class="col-6" type="text" id="roleinput" name="user_role" value="<?= $Ch_role ?>" />
                                </div>
                                <div class="valide text-center">
                                    <button class='btn btn-sm col-12 archive' type="submit" name="update_user" value="<?= $Ch_id ?>">Mettre à jour l'utilisateur</button>
                                </div> -->
                                <p>Pseudo : <?= $Ch_pseudo ?></p>
                                <p>Adresse mail : <?= $Ch_mail ?></p>
                                <p>Rôle : <?= $Ch_role ?></p>
                                <div class="valide text-center">
                                    <button class='btn btn-sm col-12 archive' type="submit" name="update_user" value="<?= $Ch_id ?>">Promouvoir <?= $Ch_pseudo ?> en admin</button>
                                </div>
                            </form>
                    <?php }
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>