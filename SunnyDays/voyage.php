<?php
require "Controller.php";
$id = $_GET["id"];
$sql = "SELECT * FROM sejours WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$voyage = mysqli_fetch_array($result, MYSQLI_ASSOC);
mysqli_free_result($result);
if (!isset($_POST['update_option'])) {
    $_POST['stop_update_travel'] = 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
        <h2 class="titresejours">DECOUVREZ VITE <?= $voyage['destination'] ?></h2>
        <div class="fleche">
            <img id="flechebas" src="medias/down-chevronyellow.png" alt="fleche vers le bas">
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="savoirplustrip" id="ancre">
            <?php if (isset($_POST['update_option'])) : ?>
                <div class="column">
                    <form class="register" method="post">
                        <div class="column">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="travel_co">Pays :</label><br>
                                    <input class="form-control" type="text" id="travel_co" name="travel_country" value="<?= $voyage['country'] ?>" />
                                </div><br>
                                <div class="col-md-6">
                                    <label for="travel-dest">Destination :</label><br>
                                    <input class="form-control" type="text" id="travel_co" name="travel_destination" value="<?= $voyage['destination'] ?>" />
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="travel-chapo">Aperçu :</label><br>
                                    <textarea class="form-control" type="text" id="travel_chapo" name="travel_chapo"><?= $voyage['chapo'] ?></textarea>
                                </div><br>
                                <div class="col-md-6">
                                    <label for="travel-pic">Nom du fichier photo :</label><br>
                                    <input class="form-control" type="text" id="travel_pic" name="travel_picture" value="<?= $voyage['picture'] ?>">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="travel-desc">Annonce :</label><br>
                                    <textarea class="form-control" type="text" id="travel_desc" name="travel_description"><?= $voyage['description'] ?></textarea>
                                </div><br>
                                <div class="col-md-6">
                                    <label for="travel_pr">Prix :</label><br>
                                    <input class="form-control" type="number" step="0.01" id="travel_pr" name="travel_price" value="<?= $voyage['price'] ?>" />
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="travel_chin">Date de début :</label><br>
                                    <input class="form-control" type="date" id="travel_chin" name="travel_checkin" value="<?= $voyage['checkin'] ?>" />
                                </div><br>
                                <div class="col-md-6">
                                    <label for="travel_chout">Date de fin :</label><br>
                                    <input class="form-control" type="date" id="travel_chout" name="travel_checkout" value="<?= $voyage['checkout'] ?>" />
                                </div>
                            </div><br><br>
                            <div class="row">
                                <button class="btnvoyage" type="submit" name="update_travel_verif" value="<?= $voyage['id'] ?>">Valider modifications</button><br>
                            </div>
                    </form>
                    <form method="post" action="voyage.php?id=<?= $voyage['id'] ?>#ancre">
                        <div class="row">
                            <button class="btnvoyage" type="submit" name="stop_update_travel" value="<?= $voyage['id'] ?>">Ne plus modifier</button><br>
                        </div>
                    </form>
                </div>
            <?php else : ?>
                AFFICHAGE
                <table class="table border border-3 border-secondary">
                    <tr class="text-center">
                        <th colspan="2"><?= $voyage['country'] ?></th>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2"><img class="imgtableau" src="medias/sejours/<?= $voyage['picture'] ?>" alt="Photo du voyage"></td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2"> <?= $voyage['destination'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2"> <?php echo nl2br($voyage['description']) ?></td>
                    </tr>

                    <tr class="text-center">
                        <td colspan="2"> <?= $voyage['price'] ?> €</td>
                    </tr>
                    <tr>
                        <td colspan="1">Date de début <?= $voyage['checkin'] ?>
                        <td colspan="1">Date de fin <?= $voyage['checkout'] ?>
                    <tr class="text-end">
                        <td colspan="2"> <a href="sejours.php">Revenir à la liste des séjours.</a></td>
                    </tr>
                </table>
            <?php endif; ?>

            <div class="row">
                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>
                    <?php if (isset($_POST['stop_update_travel'])) : ?>
                        <form method="post" class="col-md-4 savoirbtntrip" action="#ancre">
                            <button class="btnvoyage" type="submit" name="update_option" value="<?= $voyage['id'] ?>">Modifier</button>
                        </form>
                    <?php endif; ?>
                    <?php if (isset($_POST['delete_option'])) : ?>
                        <div class="row savoirbtntrip">
                            <form method="post" action="#ancre">
                                <button class="btnvoyage" type="submit" name="stop_delete_travel" value="<?= $voyage['id'] ?>">Ne plus supprimer</button>
                            </form>
                            <form method="post">
                                <button class="btnvoyage" type="submit" name="delete_travel_verif" value="<?= $voyage['id'] ?>">Valider la suppression</button>
                            </form>
                        </div>
                    <?php else : ?>
                        <form class="col-md-4 savoirbtntrip" method="post" action="voyage.php?id=<?= $voyage['id'] ?>#ancre">
                            <button class="btnvoyage" type="submit" name="delete_option" value="<?= $voyage['id'] ?>">Supprimer</button>
                        </form>
                    <?php endif; ?>
                    <div class="col-md-4 savoirbtntrip">
                        <button class="btnvoyage" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                    </div>
                <?php
                elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["membre"]') :  ?>
                    <div class="col-md-4 savoirbtntrip">
                        <button class="btnvoyage" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                    </div>
                <?php
                else : ?>

                    <div class="col-md-4 savoirbtntrip">
                        <button class="btnvoyage" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                    </div>
                <?php
                endif;
                ?>
            </div><br>
        </div>
    </div>
    <?php require "./myincludes/Footer.php"; ?>
</body>

</html>