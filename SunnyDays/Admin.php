<?php
require "Controller.php";
if ($_SESSION['user_type'] != '["admin"]') {
    header('Location: Login.php');
}
$usertype = '["membre"]';
$sql = "SELECT * FROM users WHERE user_type LIKE '$usertype' ORDER BY name ASC";
$result = mysqli_query($conn, $sql);
$listMember = mysqli_fetch_all($result, MYSQLI_ASSOC);
$usertype2 = '["admin"]';
$sql = "SELECT * FROM users WHERE user_type LIKE '$usertype2' ORDER BY name ASC";
$result = mysqli_query($conn, $sql);
$listAdmin = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
        <h2 class="titresejours">INFOS ADMINS ET MEMBRES</h2>
        <div class="fleche">
            <img id="flechebas" src="medias/down-chevronyellow.png" alt="fleche vers le bas">
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="text-center" id="admins">
            <div class="form-group">
                <h2>Liste des admins</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listAdmin as $admin) : ?>
                            <tr>
                                <td><?= $admin['name'] ?> </td>
                                <td><?= $admin['forename'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php if (!empty($listMember)) : ?>
                <form method="post">
                    <div id="listeetbutton" class="">
                        <div class="select">
                            <select name="user_select" id="user_select" class="form-control">
                                <option>--Choisir un membre--</option>
                                <?php
                                foreach ($listMember as $choice) : ?>
                                    <option value="<?= $choice['id'] ?>"><?= $choice['name'] . " - " . $choice['forename'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="buttonm">
                            <button type="submit" id="btnmodifierinfos" class="btnnews" name="select_member" value="Choice member">Modifier</button>
                        </div>
                    </div>
                </form>
            <?php
            else : ?>
                <p>Aucun membre enregistré !</p>
            <?php
            endif; ?>
            <?php if (isset($_POST['select_member'])) : ?>
                <form method="post" action="Controller.php">
                    <div id="listeetbutton" class="">
                        <div class="col-md-6">
                            <P>NOM : <?= $Member_name ?></P>
                        </div>
                        <div class="col-md-6">
                            <P>PRENOM : <?= $Member_forename ?></P>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class='btnnews' type="submit" name="update_user" value="<?= $Member_id ?>">Promouvoir <?= $Member_name . " " . $Member_forename ?> en admin</button>
                        <button class='btnnews' type="submit" name="delete_user" value="<?= $Member_id ?>">Supprimer le membre <?= $Member_name . " " . $Member_forename ?> ?</button>
                    </div>
                </form>
            <?php
            endif; ?>
            <?php include "./myincludes/Footer.php"; ?>
        </div>
    </div>
</body>

</html>