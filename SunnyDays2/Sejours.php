<?php
require "Controller.php";
include "./myincludes/Header.php";

$sql = "SELECT * FROM sejours";
$result = mysqli_query($conn, $sql);
$nbreSejours = mysqli_num_rows($result);
$listSejours = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>

<!DOCTYPE html>
<title>Séjours</title>
<html lang="en">

<body>
    <!-- PARTIE AJOUT DE VOYAGE POUR ADMIN -->
    <?php if ($_SESSION['user_type'] == '["admin"]') :
        if (isset($_POST['add_travel'])) : ?>
            <form method="post">
                <div>
                    <label for="travel_co">Pays :</label>
                    <input type="text" id="travel_co" name="travel_country" />
                </div>
                <div>
                    <label for="travel-dest">Destination :</label>
                    <input type="text" id="travel_dest" name="travel_destination">
                </div>
                <div>
                    <label for="travel-chapo">Aperçu :</label>
                    <textarea type="text" id="travel_chapo" name="travel_chapo"></textarea>
                </div>
                <div>
                    <label for="travel-desc">Annonce :</label>
                    <textarea type="text" id="travel_desc" name="travel_description"></textarea>
                </div>
                <div>
                    <label for="travel_pr">Prix :</label>
                    <input type="number" step="0.01" id="travel_pr" name="travel_price" />
                </div>
                <div>
                    <label for="travel_chin">Date de début :</label>
                    <input type="date" id="travel_chin" name="travel_checkin" />
                </div>
                <div>
                    <label for="travel_chout">Date de fin :</label>
                    <input type="date" id="travel_chout" name="travel_checkout" />
                </div>
                <div>
                    <label for="travel-pic">Nom du fichier photo :</label>
                    <input type="text" id="travel_pic" name="travel_picture">
                </div>
                <div class="text-center">
                    <button class='btn btn-success' type="submit" name="insert_travel">Poster le voyage</button>
                </div>
            </form>
        <?php else : ?>
            <form method="post">
                <button class='btn btn-success' type="submit" name="add_travel">Ajouter un voyage</button>
            </form>
    <?php endif;
    endif;
    ?>
    <h4>Nous avons <?= $nbreSejours ?> séjours à vous proposer !</h4>
    <!-- AFFICHAGE LISTE SEJOURS -->
    <table class="text-center">
        <tr class="col-12">
            <th>Photo</th>
            <th>Pays</th>
            <th>Destination</th>
            <th>Aperçu</th>
            <th>Prix</th>
            <th>Date de début</th>
            <th>Date de fin</th>
        </tr>
        <?php foreach ($listSejours as $sejour) : ?>
            <tr class="col-12 ">
                <td><img src="img/<?= $sejour['picture'] ?>" alt="Photo du voyage"></td>
                <td><?= $sejour['country'] ?></td>
                <td><?= $sejour['destination'] ?></td>
                <td><?= $sejour['chapo'] ?></td>
                <td><?= $sejour['price'] ?></td>
                <td><?= $sejour['checkin'] ?></td>
                <td><?= $sejour['checkout'] ?></td>
                <td><a href="voyage.php?id=<?= $sejour['id'] ?>">En savoir plus...</a></td>
                <td class="col-4">
                    <div class="BtnList row">
                        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
                            if (isset($_POST['delete_option'])) : ?>
                                <form method="post">
                                    <button name="stop_delete" value="<?= $sejour['id'] ?>">Ne plus supprimer </button>
                                    <button type="submit" name="delete_travel_verif" value="<?= $sejour['id'] ?>">Confirmer suppression</button>
                                </form>
                            <?php else : ?>
                                <form method="post" class="col-3">
                                    <button type="submit" name="delete_option" value="<?= $sejour['id'] ?>">Supprimer</button>
                                </form>
                        <?php
                            endif;
                        endif;
                        ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

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