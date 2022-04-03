<?php
require "Controller.php";
$id = $_GET["id"];
$sql = "SELECT * FROM sejours WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$voyage = mysqli_fetch_array($result, MYSQLI_ASSOC);
mysqli_free_result($result);
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
        <div class="row">
            <div class="col-8 offset-2" id="travel_update">

                <?php if (isset($_POST['update_option'])) : ?>
                    <form method="post">
                        <div class="form-group">
                            <div>
                                <label for="travel_co">Pays :</label>
                                <input class="form-control" type="text" id="travel_co" name="travel_country" value="<?= $voyage['country'] ?>" />
                            </div>
                            <div>
                                <label for="travel-dest">Destination :</label>
                                <input class="form-control" type="text" id="travel_dest" name="travel_destination" value="<?= $voyage['destination'] ?>">
                            </div>
                            <div>
                                <label for="travel-chapo">Aperçu :</label>
                                <textarea class="form-control" type="text" id="travel_chapo" name="travel_chapo"><?= $voyage['chapo'] ?></textarea>
                            </div>
                            <div>
                                <label for="travel-desc">Annonce :</label>
                                <textarea class="form-control" type="text" id="travel_desc" name="travel_description"><?= $voyage['description'] ?></textarea>
                            </div>
                            <div>
                                <label for="travel_pr">Prix :</label>
                                <input class="form-control" type="number" step="0.01" id="travel_pr" name="travel_price" value="<?= $voyage['price'] ?>" />
                            </div>
                            <div>
                                <label for="travel_chin">Date de début :</label>
                                <input class="form-control" type="date" id="travel_chin" name="travel_checkin" value="<?= $voyage['checkin'] ?>" />
                            </div>
                            <div>
                                <label for="travel_chout">Date de fin :</label>
                                <input class="form-control" type="date" id="travel_chout" name="travel_checkout" value="<?= $voyage['checkout'] ?>" />
                            </div>
                            <div>
                                <label for="travel-pic">Nom du fichier photo :</label>
                                <input class="form-control" type="text" id="travel_pic" name="travel_picture" value="<?= $voyage['picture'] ?>">
                            </div>
                        </div>
                        <?php if (isset($_POST['update_option'])) : ?>
                            <button class="btnnews" type="submit" name="stop_update_travel" value="<?= $voyage['id'] ?>">Ne plus modifier</button>
                            <button class="btnnews" type="submit" name="update_travel_verif" value="<?= $voyage['id'] ?>">Valider modifications</button>
                        <?php
                        endif; ?>
                    </form>
                <?php else : ?>
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
                            <td colspan="2"> <?= $voyage['description'] ?></td>
                        </tr>

                        <tr class="text-center">
                            <td colspan="2"> <?= $voyage['price'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="1">Date de début <?= $voyage['checkin'] ?>
                            <td colspan="1">Date de fin <?= $voyage['checkout'] ?>
                        <tr class="text-end">
                            <td colspan="2"> <a href="sejours.php">Revenir à la liste des séjours.</a></td>
                        </tr>
                    </table>
                <?php endif; ?>
                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>
                    <?php if (!isset($_POST['stop_update_travel'])) : ?>
                        <form method="post">
                            <button class="btnnews" type="submit" name="update_option" value="<?= $voyage['id'] ?>">Modifier</button>
                        </form>
                    <?php endif; ?>
                    <form method="post">
                        <?php if (isset($_POST['delete_option'])) : ?>
                            <button onClick="href='voyage.php?id=<?= $voyage['id'] ?>#travel_update'" name="stop_delete_travel" value="<?= $voyage['id'] ?>">Ne plus supprimer</button>
                            <form method="post">
                                <button class="btnnews" type="submit" name="delete_travel_verif" value="<?= $voyage['id'] ?>">Valider la suppression</button>
                            </form>
                        <?php else : ?>
                            <form method="get">
                                <button class="btnnews" type="submit" name="delete_option" value="<?= $voyage['id'] ?>">Supprimer</button>
                            </form>
                        <?php endif; ?>
                        <form>
                            <button class="btnnews" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                        </form>
                    <?php
                elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["membre"]') :  ?>
                        <form>
                            <button class="btnnews" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                        </form>
                    <?php
                else : ?>
                        <form action="Login.php">
                            <button class="btnnews" type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                        </form>
                    <?php
                endif;
                    ?>
            </div>
        </div>
    </div>
    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>