<?php
require "Controller.php";

$sql = "SELECT * FROM sejours";
$result = mysqli_query($conn, $sql);
$nbreSejours = mysqli_num_rows($result);
$listSejours = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

isset($_SESSION['conf_travel_add']) ? $Conf_travel_add = $_SESSION['conf_travel_add'] : "";
isset($_SESSION['err_travel_add']) ? $Err_travel_add = $_SESSION['err_travel_add'] : "";
isset($_SESSION['conf_travel_update']) ? $Conf_travel_update = $_SESSION['conf_travel_update'] : "";
isset($_SESSION['err_travel_update']) ? $Err_travel_update = $_SESSION['err_travel_update'] : "";
?>
<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
        <h2 class="titresejours">DECOUVREZ VITE NOS SEJOURS</h2>
        <div class="fleche">
            <img id="flechebas" src="medias/down-chevronyellow.png" alt="fleche vers le bas">
        </div>
    </div>
</header>

<body>
    <div class="container">
        <!-- PARTIE AJOUT DE VOYAGE POUR ADMIN -->
        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
            if (isset($_POST['add_travel'])) : ?>
                <form method="post">
                    <div class="form-group">
                        <div>
                            <label for="travel_co">Pays :</label>
                            <input class="form-control" type="text" id="travel_co" name="travel_country" />
                        </div>
                        <div>
                            <label for="travel-dest">Destination :</label>
                            <input class="form-control" type="text" id="travel_dest" name="travel_destination">
                        </div>
                        <div>
                            <label for="travel-chapo">Aperçu :</label>
                            <textarea class="form-control" type="text" id="travel_chapo" name="travel_chapo"></textarea>
                        </div>
                        <div>
                            <label for="travel-desc">Annonce :</label>
                            <textarea class="form-control" type="text" id="travel_desc" name="travel_description"></textarea>
                        </div>
                        <div>
                            <label for="travel_pr">Prix :</label>
                            <input class="form-control" type="number" step="0.01" id="travel_pr" name="travel_price" />
                        </div>
                        <div>
                            <label for="travel_chin">Date de début :</label>
                            <input class="form-control" type="date" id="travel_chin" name="travel_checkin" />
                        </div>
                        <div>
                            <label for="travel_chout">Date de fin :</label>
                            <input class="form-control" type="date" id="travel_chout" name="travel_checkout" />
                        </div>
                        <div>
                            <label for="travel-pic">Nom du fichier photo :</label>
                            <input class="form-control" type="text" id="travel_pic" name="travel_picture">
                        </div>
                        <div class="text-center">
                            <button class="btnnews" type="submit" name="insert_travel">Poster le voyage</button>
                        </div>
                    </div>
                </form>
            <?php else : ?>
                <form method="post">
                    <button class="btnnews" type="submit" name="add_travel">Ajouter un voyage</button>
                </form>
        <?php endif;
        endif;
        ?>
        <div class="" id="sejourtest">
            <div class="form-group">
                <?php echo !empty($Conf_travel_add) ? $Conf_travel_add : "";
                echo !empty($Err_travel_add) ? $Err_travel_add : "";
                echo !empty($Conf_travel_update) ? $Conf_travel_update : "";
                echo !empty($Err_travel_update) ? $Err_travel_update : "";  ?>
                <h2 class="listedevoyage">Nous avons <?= $nbreSejours ?> séjours à vous proposer !</h2>
                <!-- AFFICHAGE LISTE SEJOURS -->

                <!-- <thead>
                        <tr class="col-12">
                            <th>PAYSAGE</th>
                            <th>OFFRE</th>
                            <th>DESTINATION</th>
                            <th>DESCRIPTION</th>
                            <th>PERIODE DE DEPART</th>
                            <th>TARIF</th>
                        </tr>
                    </thead> -->
                <?php foreach ($listSejours as $sejour) : ?>
                    <table class="tablesejour">
                        <tbody>
                            <tr class="text-center">
                                <th colspan="2"><?= $sejour['country'] ?></th>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2"><img class="imgtableau" src="medias/sejours/<?= $sejour['picture'] ?>" alt="<?= $sejour['picture'] ?>"></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2"><?= $sejour['destination'] ?></td>
                            </tr>
                            <tr class="text-center text-justify">
                                <td colspan="2" class="descriptionsejours"><?= $sejour['chapo'] ?> <br> <a href="voyage.php?id=<?= $sejour['id'] ?>">En savoir plus...</a></td>
                            </tr>
                            <tr>
                                <td colspan="1">Du <?= $sejour['checkin'] ?> au <?= $sejour['checkout'] ?></td>
                                <td colspan="1"><?= $sejour['price'] ?> €</td>
                            </tr>
                            <tr class="text-center">
                                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
                                    if (isset($_POST['delete_option'])) : ?>
                                        <td colspan="2">
                                            <form method="post">
                                                <button class="btnnews" name="stop_delete" value="<?= $sejour['id'] ?>">Ne plus supprimer </button>
                                                <button class="btnnews" type="submit" name="delete_travel_verif" value="<?= $sejour['id'] ?>">Confirmer suppression</button>
                                            </form>
                                        </td>
                                    <?php else : ?>
                                        <td colspan="2">
                                            <form method="post">
                                                <button class="btnnews" type="submit" name="delete_option" value="<?= $sejour['id'] ?>">Supprimer</button>
                                            </form>
                                        </td>
                                <?php
                                    endif;
                                endif;
                                ?>
                            </tr>
                        </tbody>
                    </table><br>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <?php include "./myincludes/Footer.php";
    $_SESSION['conf_travel_add'] = $_SESSION['err_travel_add'] = $_SESSION['conf_travel_update'] = $_SESSION['err_travel_update'] = ""; ?>
</body>

</html>