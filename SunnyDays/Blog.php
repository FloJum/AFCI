<?php
require "Controller.php";
if (empty($_SESSION['user_type'])) {
    header('Location: Login.php');
}
$sql = "SELECT * FROM blog ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$nbreArticles = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
isset($_SESSION['conf_art_add']) ? $Conf_art_add = $_SESSION['conf_art_add'] : "";
isset($_SESSION['conf_art_update']) ? $Conf_art_update = $_SESSION['conf_art_update'] : "";
$member = $_SESSION['user_name'] . " " . $_SESSION['user_forename'];
// if (isset($_SESSION['conf_art_add'])) {
//     $Conf_art_add = $_SESSION['conf_art_add'];
//     $_SESSION['conf_art_add'] = null;
//     echo "<script type='text/javascript'>alert('$Conf_art_add');</script>";
// } else if (!empty($Err_art_add)) {
//     echo "<script type='text/javascript'>alert('$Err_art_add');</script>";
// }
?>

<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
        <h2 class="titresejours">LA COMMUNAUTE SUNNY DAYS</h2>
        <div class="fleche">
            <img id="flechebas" src="medias/down-chevronyellow.png" alt="fleche vers le bas">
        </div>
    </div>
</header>

<body>
    <div class="container">
        <?php if (isset($_POST['add_article'])) : ?>
            <form method="post">
                <div id="anchor_add">
                    <label class="labelblog" for="art_title">Titre :</label><br>
                    <input class="form-controlajouttitre" type="text" id="art_title" name="art_title" />
                </div>
                <div>
                    <label class="labelblog" for="art_content">Article :</label><br>
                    <textarea class="form-controlblogmodif" type="text" id="art_content" name="art_content"></textarea>
                </div><br>
                <div class="text-center">
                    <button class="btnnews" type="submit" name="insert_article">Poster l'article</button>
                </div>
            </form>
            <br>
        <?php else : ?>
            <form method="post" action="#anchor_add">
                <button class="btnnews" type="submit" name="add_article">Ajouter un article</button>
            </form>
        <?php endif; ?>
        <!-- MESSAGE DE VALIDATION OU D'ERREUR A AFFICHER OU ON VEUT -->
        <?php echo !empty($Conf_art_add) ? $Conf_art_add : "";
        echo !empty($Err_art_add) ? $Err_art_add : ""; ?>
        <!-- AFFICHAGE DE LA LISTE DES ARTICLES  -->
        <?php if ($nbreArticles > 0) : ?>
            <h4>Il y a <?= $nbreArticles ?> articles en ligne !</h4>
            <?php foreach ($all as $Article) : ?>
                <table class="table border border-3 border-secondary">
                    <form method="post">
                        <?php if (isset($_POST['start_update']) && $_POST['start_update'] == $Article['id']) : ?>

                            <tr>
                                <th colspan="3"> <input class="form-control" type="text" id="title" name="art_title" value="<?= $Article['title']  ?>" /> </th>
                            </tr>
                            <tr>
                                <td colspan="3"> <textarea class="form-control" type="text" id="title" name="art_content"><?= $Article['article'] ?></textarea>
                                <td>
                            </tr>
                        <?php else : ?>
                            <tr class="text-center">
                                <th colspan="3"><?= $Article['title'] ?></th>
                            </tr>
                            <tr class="text-justify ">
                                <td colspan="3"><?= $Article['article'] ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr class="text-center">
                            <td colspan="1"> Le : <i><?= $Article['date_publi'] ?></i></td>
                            <td colspan="1">Écrit par : <strong><?= $Article['autor'] ?></strong></td>
                            <td colspan="1"><?php if (!empty($Article['date_update'])) : ?>
                                    Modifié le <?= $Article['date_update'] ?>
                            </td>
                        </tr>
                    <?php endif; ?>


                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>
                        <tr class="text-center">
                            <td colspan="3">
                                <?php if (isset($_POST['start_update']) && $_POST['start_update'] == $Article['id']) : ?>
                                    <button class="btnnews" type="submit" name="stop_update" value="<?= $Article['id'] ?>">Ne plus éditer </button>
                                    <button class="btnnews" type="submit" name="update_article" value="<?= $Article['id'] ?>">Valider modifications </button>
                                <?php else : ?>
                                    <button class="btnnews" type="submit" name="start_update" value="<?= $Article['id'] ?>">Editer </button>
                                <?php endif; ?>

                                <?php if (isset($_POST['delete_article']) && $_POST['delete_article'] == $Article['id']) : ?>
                                    <button class="btnnews" name="stop_update" value="<?= $Article['id'] ?>">Ne plus supprimer </button>
                                    <button class="btnnews" type="submit" name="delete_article_verif" value="<?= $Article['id'] ?>">Confirmer suppression</button>
                                <?php else : ?>
                                    <button class="btnnews" name="delete_article" value="<?= $Article['id'] ?>">Supprimer</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php
                    elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["membre"]') :  if ($Article['autor'] == $member) : ?>
                            <tr class="text-center">
                                <td colspan="3">
                                    <?php if (isset($_POST['start_update']) && $_POST['start_update'] == $Article['id']) : ?>
                                        <button class="btnnews" type="submit" name="stop_update" value="<?= $Article['id'] ?>">Ne plus éditer </button>
                                        <button class="btnnews" type="submit" name="update_article" value="<?= $Article['id'] ?>">Valider modifications </button>
                                    <?php else : ?>
                                        <button class="btnnews" type="submit" name="start_update" value="<?= $Article['id'] ?>">Editer </button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                    <?php endif;
                    endif;
                    ?>

                    </form>
                    <tr class="text-center">
                        <td colspan="3">
                            <h5>Section commentaires :</h5>
                        </td>
                    </tr>
                    <?php $Art_id = $Article['id'];
                    $sql = "SELECT * FROM commentaries INNER JOIN users ON commentaries.autor_id = users.id WHERE blog_id = '$Art_id' ORDER BY commentaries.id ASC";
                    $req = mysqli_query($conn, $sql);
                    $nbreComm = mysqli_num_rows($req);
                    $listComm = mysqli_fetch_all($req, MYSQLI_ASSOC);
                    if ($nbreComm > 0) :
                        foreach ($listComm as $Comm) : ?>
                            <tr>
                                <td colspan="3">
                                    <h6><strong><?= $Comm['name'] . " " . $Comm['forename'] ?></strong> le <i><?= $Comm['datepubli'] ?></i></h6>
                                    <p> <?= $Comm['commentary'] ?></p>
                                </td>
                            </tr>
                    <?php endforeach;
                    endif; ?>

                    <tr>
                        <td colspan="3">
                            <form method="post">
                                <textarea class="form-control" name="commentary" cols="100" rows="5" placeholder="Votre commentaire..."></textarea>
                                <br>
                                <button class="btnnews" type="submit" name="add_comm" value="<?= $Article['id'] ?>">Poster commentaire</button>
                            </form>
                            <?php echo isset($_SESSION['conf_comm']) ? $err_comm = $_SESSION['conf_comm'] : "";
                            echo isset($_SESSION['err_comm']) ? $err_comm = $_SESSION['err_comm'] : ""; ?>
                        </td>
                    </tr>
                </table>
            <?php endforeach;
            mysqli_free_result($req);
            mysqli_close($conn); ?>
            <div class="container lastdivblog">
                <!-- MESSAGE DE VALIDATION OU D'ERREUR A AFFICHER OU ON VEUT -->
                <p class="err text-center"><?php echo !empty($Conf_art_update) ? $Conf_art_update : "";
                                            $_SESSION['conf_art_add'] = $Conf_art_update = ""; ?></p>
                <p class="err text-center"><?php echo !empty($Err_art_update) ? $Err_art_update : ""; ?></p>
            </div><br>
        <?php else : ?>
            <p>Il n'y a pas encore d'article en ligne malheureusement. Vous devriez en ajouter un ! </p>
        <?php endif; ?>
    </div>

    <?php include "./myincludes/Footer.php";
    $_SESSION['conf_art_add'] = $_SESSION['err_art_add'] = $_SESSION['conf_art_update'] = $_SESSION['err_art_update'] =  $_SESSION['conf_comm'] = $_SESSION['err_comm'] = ""; ?>
</body>

</html>