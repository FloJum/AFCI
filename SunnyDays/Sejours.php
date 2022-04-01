<?php
require "Controller.php";

$sql = "SELECT * FROM sejours";
$result = mysqli_query($conn, $sql);
$nbreSejours = mysqli_num_rows($result);
$listSejours = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
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
    <!-- PARTIE AJOUT DE VOYAGE POUR ADMIN -->
    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
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


    <div class="" id="sejourtest">
        <div class="form-group">
            <h2 class="listedevoyage">Nous avons <?= $nbreSejours ?> séjours à vous proposer !</h2>
            <!-- AFFICHAGE LISTE SEJOURS -->
            <table class="tablesejour">
                <thead>
                    <tr class="col-12">
                        <th>PAYSAGE</th>
                        <th>OFFRE</th>
                        <th>DESTINATION</th>
                        <th>DESCRIPTION</th>
                        <th>PERIODE DE DEPART</th>
                        <th>TARIF</th>
                    </tr>
                </thead>
                <?php foreach ($listSejours as $sejour) : ?>
                    <tbody>
                        <tr class="col-12 ">
                            <td><img class="imgtableau" src="medias/sejours/<?= $sejour['picture'] ?>" alt="<?= $sejour['picture'] ?>"></td>
                            <td><?= $sejour['country'] ?></td>
                            <td><?= $sejour['destination'] ?></td>
                            <td class="descriptionsejours"><?= $sejour['chapo'] ?> <br> <a href="voyage.php?id=<?= $sejour['id'] ?>">En savoir plus...</a></td>
                            <td>Du <?= $sejour['checkin'] ?> au <?= $sejour['checkout'] ?></td>
                            <td><?= $sejour['price'] ?> €</td>
                            <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
                                if (isset($_POST['delete_option'])) : ?>
                                    <td>
                                        <form method="post">
                                            <button name="stop_delete" value="<?= $sejour['id'] ?>">Ne plus supprimer </button>
                                            <button type="submit" name="delete_travel_verif" value="<?= $sejour['id'] ?>">Confirmer suppression</button>
                                        </form>
                                    </td>
                                <?php else : ?>
                                    <td>
                                        <form method="post" class="col-3">
                                            <button type="submit" name="delete_option" value="<?= $sejour['id'] ?>">Supprimer</button>
                                        </form>
                                    </td>
                            <?php
                                endif;
                            endif;
                            ?>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>