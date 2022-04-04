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
    <div class="container">
            <!-- PARTIE AJOUT DE VOYAGE POUR ADMIN -->
            <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
                if (isset($_POST['add_travel'])) : ?>
        <div class="savoirplustrip">
            <form class="register" method="post" >
                <div class="column" id="anchor_add">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="travel_co">Pays :</label><br>
                            <input class="form-control" type="text" id="travel_co" name="travel_country"/>
                        </div><br>
                        <div class="col-md-6">
                            <label for="travel-dest">Destination :</label><br>
                            <input class="form-control" type="text" id="travel_co" name="travel_destination" />
                        </div><br>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="travel-chapo">Aperçu :</label><br>
                            <textarea class="form-control" type="text" id="travel_chapo" name="travel_chapo"></textarea>
                        </div><br>
                        <div class="col-md-6">
                            <label for="travel-pic">Nom du fichier photo :</label><br>
                            <input class="form-control" type="text" id="travel_pic" name="travel_picture" >
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="travel-desc">Annonce :</label><br>
                            <textarea class="form-control" type="text" id="travel_desc" name="travel_description"></textarea>
                        </div><br>
                        <div class="col-md-6">
                            <label for="travel_pr">Prix :</label><br>
                            <input class="form-control"type="number" step="0.01" id="travel_pr" name="travel_price" />
                        </div>
                    </div><br>
                    <div class="row">    
                        <div class="col-md-6">
                            <label for="travel_chin">Date de début :</label><br>
                            <input class="form-control" type="date" id="travel_chin" name="travel_checkin" />
                        </div><br>
                        <div class="col-md-6">
                            <label for="travel_chout">Date de fin :</label><br>
                            <input class="form-control" type="date" id="travel_chout" name="travel_checkout" />
                        </div><br>
                    </div><br>

                        <div class="text-center">
                            <button class="btnvoyage1" type="submit" name="insert_travel">Poster le voyage</button>
                        </div>
                    <?php else : ?>
                        <form method="post" action="#anchor_add">
                            <button class="btnvoyage1" type="submit" name="add_travel">Ajouter un voyage</button>
                        </form>
                    <?php endif;endif;?>
                        <br>

            </form>
        </div>
    </div>



    <div class="container">
        
            <h2 class="listedevoyage"><?= $nbreSejours ?> séjours sont actuellement disponibles !</h2>
            <!-- AFFICHAGE LISTE SEJOURS -->
            <?php echo isset($_SESSION['conf_travel_add']) ? $Conf_art_add = $_SESSION['conf_travel_add'] : ""; 
           echo isset($_SESSION['err_travel_add']) ? $Conf_art_add = $_SESSION['err_travel_add'] : ""; ?>
            <?php foreach ($listSejours as $sejour) : ?>
            <div class="sejoursprez">
                <div class="upsejour" id="ancre<?= $sejour['id'] ?>">
                    <div class="col-md-6 imagesejourss">
                        <img class="imgtableau" src="medias/sejours/<?= $sejour['picture'] ?>" alt="<?= $sejour['picture'] ?>">
                    </div>
                    <div class="col-md-6 infossejourss">
                        <div class="infoscolsejours">
                            <div class="paysville">
                            <?= $sejour['country'] ?>
                            </div>
                            <div class="paysville">
                            <?= $sejour['destination'] ?>
                            </div>
                        </div>

                        <div class="infoscolsejours">
                            Du <?= $sejour['checkin'] ?> au <?= $sejour['checkout'] ?>
                        </div>
                        <div class="infoscolsejours" id="pricesejours">
                            <?= $sejour['price'] ?> €
                        </div>
                    </div>

                </div>
                <div class="downsejour">
                    <div class="col-md-8 chapeaudesjours">
                        <?= $sejour['chapo'] ?> <br> <a href="voyage.php?id=<?= $sejour['id'] ?>">En savoir plus...</a>
                    </div>
                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :
                                            if (isset($_POST['delete_option'])) : ?>
                    <div class="btnsejoursfin">
                        <form method="post" class="formbtnsejoursfin">
                            <button class="btnvoyage" name="stop_delete" value="<?= $sejour['id'] ?>">Ne plus supprimer </button>
                            <button class="btnvoyage" type="submit" name="delete_travel_verif" value="<?= $sejour['id'] ?>">Confirmer suppression</button>
                        </form>

                    </div>
                    <?php else : ?>
                        <div class="btnsejoursfin">
                            <form class="formbtnsejoursfin" method="post" action="voyage.php?id=<?= $sejour['id'] ?>#ancre">
                                <button class="btnvoyage" type="submit" name="update_option" value="<?= $sejour['id'] ?>">Modifier</button>
                            </form>
                            <form method="post" class="formbtnsejoursfin" action="#ancre<?= $sejour['id'] ?>">
                                <button class="btnvoyage" type="submit" name="delete_option" value="<?= $sejour['id'] ?>">Supprimer</button>
                            </form>
                        </div>
                        <?php endif; else :?>

                        <div class="col-md-4 savoirbtntrip">
                                <button class="btnvoyage" type="submit" name="buy_travel" value="<?= $sejour['id'] ?>">Commander</button>
                        </div>
                        <?php endif; ?>
                </div>

            </div>
            <?php endforeach; ?>

        
    </div>

    </div>
        <?php include "./myincludes/Footer.php";
        $_SESSION['conf_travel_add'] = $_SESSION['err_travel_add'] = $_SESSION['conf_travel_update'] = $_SESSION['err_travel_update'] =  "";  ?>
</body>

</html>