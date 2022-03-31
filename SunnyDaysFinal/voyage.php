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
        
    </div>
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form method="post" action="Controller.php">
                  
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
                   
                    
                    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == '["admin"]') :  ?>
                      
                            <button type="submit" name="update_travel_verif" value="<?= $voyage['id'] ?>">Valider modifications</button>
                       
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
    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>