<?php
include "Controller.php";
include "./myincludes/Header.php";
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);
$nbreArticles = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
isset($_SESSION['conf_art_add']) ? $Conf_art_add = $_SESSION['conf_art_add'] : "";
isset($_SESSION['conf_art_update']) ? $Conf_art_update = $_SESSION['conf_art_update'] : "";
?>

<!DOCTYPE html>
<title>Blog</title>
<html lang="en">

<body>

    <?php if (isset($_POST['add_article'])) : ?>
        <form method="post" action="Controller.php">
            <div>
                <label for="art_title">Titre :</label>
                <input type="text" id="art_title" name="art_title" />
            </div>
            <div>
                <label for="art_autor">Auteur :</label>
                <input type="text" id="art_autor" name="art_autor" />
            </div>
            <div>
                <label for="art_content">Article :</label>
                <textarea type="text" id="art_content" name="art_content"></textarea>
            </div>
            <div class="text-center">
                <button class='btn btn-success' type="submit" name="insert_article">Poster l'article</button>
            </div>
        </form>
    <?php else : ?>
        <form method="post">
            <button class='btn btn-success' type="submit" name="add_article">Ajouter un article</button>
        </form>
    <?php endif; ?>
    <!-- MESSAGE DE VALIDATION OU D'ERREUR A AFFICHER OU ON VEUT -->
    <p class="err text-center"><?php echo !empty($Conf_art_add) ? $Conf_art_add : "";
                                $_SESSION['conf_art_add'] = $Conf_art_add = ""; ?></p>
    <p class="err text-center"><?php echo !empty($Err_art_add) ? $Err_art_add : ""; ?></p>
    <!-- AFFICHAGE DE LA LISTE DES ARTICLES  -->
    <?php foreach ($all as $Article) : ?>
        <table class="table border border-3 border-secondary">
            <form method="post">
                    <?php if (isset($_POST['start_update']) && $_POST['start_update'] == $Article['id']) : ?>

                        <tr><th> <input type="text" id="title" name="art_title" value="<?= $Article['title']  ?>" /> </th></tr>
                        <tr><td>  <textarea type="text" id="title" name="art_content"><?= $Article['article'] ?></textarea><td></tr>
                        <?php else : ?>
                            <tr><th><?=$Article['title'] ?></th></tr>
                            <tr><td><?=$Article['article']?></td></tr>
                        <?php endif; ?>
                <tr>
                    <td>Écrit par : <?= $Article['autor'] ?></td>
                    <td>le : <?= $Article['date_publi'] ?></td>
                    <?php if (!empty($Article['date_update'])) : ?>
                        <td>Modifié le <?= $Article['date_update'] ?></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>
                        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>

                                <?php if (isset($_POST['start_update'])) : ?>
                                    <button type="submit" name="stop_update" value="<?= $Article['id'] ?>">Ne plus éditer </button>
                                    <button type="submit" name="update_article" value="<?= $Article['id'] ?>">Valider modifications </button>
                                <?php else : ?>
                                    <button type="submit" name="start_update" value="<?= $Article['id'] ?>">Editer </button>
                                <?php endif; ?>

                                <?php if (isset($_POST['delete_article']) && $_POST['delete_article'] == $Article['id']) : ?>
                                    <button name="stop_update" value="<?= $Article['id'] ?>">Ne plus supprimer </button>
                                    <button type="submit" name="delete_article_verif" value="<?= $Article['id'] ?>">Confirmer suppression</button>
                                <?php else : ?>
                                    <button name="delete_article" value="<?= $Article['id'] ?>">Supprimer</button>
                                <?php endif; ?>
                            <?php 
                        elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["membre"]') : ?>

                                <?php if (isset($_POST['start_update'])) : ?>
                                    <button type="submit" name="stop_update" value="<?= $Article['id'] ?>">Ne plus éditer </button>
                                    <button type="submit" name="update_article" value="<?= $Article['id'] ?>">Valider modifications </button>
                                <?php else : ?>
                                    <button type="submit" name="start_update" value="<?= $Article['id'] ?>">Editer </button>
                                <?php endif; ?>
                        <?php 
                        endif;
                        ?>
                    </td>
                </tr>
                <tr><td>Future section comm</td></tr>
            </form>
        </table>
    <?php endforeach; ?>

    <!-- MESSAGE DE VALIDATION OU D'ERREUR A AFFICHER OU ON VEUT -->
    <p class="err text-center"><?php echo !empty($Conf_art_update) ? $Conf_art_update : "";
                                $_SESSION['conf_art_add'] = $Conf_art_update = ""; ?></p>
    <p class="err text-center"><?php echo !empty($Err_art_update) ? $Err_art_update : ""; ?></p>

    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>