<?php
require "Controller.php";
include "./myincludes/Header.php";
$id = $_GET["id"];
$sql = "SELECT * FROM sejours WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$voyage = mysqli_fetch_array($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>

<!DOCTYPE html>
<title>Voyage</title>
<html lang="en">

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form method="post">
                    <?php if (isset($_POST['update_option'])) : ?>
                        <div>
                            <label for="travel_co">Pays :</label>
                            <input type="text" id="travel_co" name="travel_country" value="<?= $voyage['country'] ?>" />
                        </div>
                        <div>
                            <label for="travel-dest">Destination :</label>
                            <input type="text" id="travel_dest" name="travel_destination" value="<?= $voyage['destination'] ?>">
                        </div>
                        <div>
                            <label for="travel-chapo">Aperçu :</label>
                            <textarea type="text" id="travel_chapo" name="travel_chapo"><?= $voyage['chapo'] ?></textarea>
                        </div>
                        <div>
                            <label for="travel-desc">Annonce :</label>
                            <textarea type="text" id="travel_desc" name="travel_description"><?= $voyage['description'] ?></textarea>
                        </div>
                        <div>
                            <label for="travel_pr">Prix :</label>
                            <input type="number" step="0.01" id="travel_pr" name="travel_price" value="<?= $voyage['price'] ?>" />
                        </div>
                        <div>
                            <label for="travel_chin">Date de début :</label>
                            <input type="date" id="travel_chin" name="travel_checkin" value="<?= $voyage['checkin'] ?>" />
                        </div>
                        <div>
                            <label for="travel_chout">Date de fin :</label>
                            <input type="date" id="travel_chout" name="travel_checkout" value="<?= $voyage['checkout'] ?>" />
                        </div>
                        <div>
                            <label for="travel-pic">Nom du fichier photo :</label>
                            <input type="text" id="travel_pic" name="travel_picture" value="<?= $voyage['picture'] ?>">
                        </div>
                    <?php else : ?>
                        <table class="table border border-3 border-secondary">
                            <tr class="text-center col-12">
                                <th class="col-9"><?= $voyage['country'] ?></td>
                            </tr>
                            <tr class="text-center col-12">
                                <td><img src="img/<?= $voyage['picture'] ?>" alt="Photo du voyage"></td>
                            </tr>
                            <tr class="text-center col-12">
                                <td class="col-3"> <?= $voyage['destination'] ?></td>
                            </tr>
                            <tr class="text-center col-12">
                                <td class="col-3"> <?= $voyage['description'] ?></td>
                            </tr>

                            <tr>
                                <td colspan="2"> <?= $voyage['price'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Date de début <?= $voyage['checkin'] ?>
                                <td colspan="2">Date de fin <?= $voyage['checkout'] ?>
                            <tr class="text-end">
                                <td colspan="2"> <a href="sejours.php">Revenir à la liste des séjours.</a></td>
                            </tr>
                        </table>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>
                        <?php if (isset($_POST['update_option'])) : ?>
                            <button type="submit" name="stop_update_travel" value="<?= $voyage['id'] ?>">Ne plus modifier</button>
                            <button type="submit" name="update_travel_verif" value="<?= $voyage['id'] ?>">Valider modifications</button>
                        <?php else : ?>
                            <button type="submit" name="update_option" value="<?= $voyage['id'] ?>">Modifier</button>
                        <?php endif; ?>
                        <?php if (isset($_POST['delete_option'])) : ?>
                            <button type="submit" name="stop_delete_travel" value="<?= $voyage['id'] ?>">Ne plus supprimer</button>
                            <button type="submit" name="delete_travel_verif" value="<?= $voyage['id'] ?>">Valider la suppression</button>
                        <?php else : ?>
                            <button type="submit" name="delete_option" value="<?= $voyage['id'] ?>">Supprimer</button>
                        <?php endif; ?>


                        <button type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>
                    <?php
                    elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["membre"]') :  ?> <button type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>

                    <?php
                    else : ?>

                        <button type="submit" name="buy_travel" value="<?= $voyage['id'] ?>">Commander</button>


                    <?php
                    endif;
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php require "./myincludes/Footer.php"; ?>
</body>

</html>

<style>
    img {
        height: 150px;
        width: 150px;
        ;
    }
</style>