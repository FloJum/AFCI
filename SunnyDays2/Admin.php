<?php
require "Controller.php";
include "./myincludes/Header.php";
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
<title>Admin</title>
<html lang="en">

<body>
    <ul>Liste des admin :
        <?php foreach ($listAdmin as $admin) : ?>
            <li><?= $admin['name'] . " " . $admin['forename'] ?></li>
        <?php endforeach; ?>
    </ul>
    <?php if (!empty($listMember)) : ?>
        <form method="post">
            <select name="user_select" id="user_select">
                <option>--Choisir un membre--</option>
                <?php
                foreach ($listMember as $choice) : ?>
                    <option value="<?= $choice['id'] ?>"><?= $choice['name'] . " - " . $choice['forename'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="select_member" value="Choice member">Changer infos/membre</button>
        </form>
    <?php
    else : ?>
        <p>Aucun membre enregistré !</p>
    <?php
    endif; ?>
    <?php if (isset($_POST['select_member'])) : ?>
        <form method="post" action="Controller.php">

            <p>Nom : <?= $Member_name ?></p>
            <p>Prénom : <?= $Member_forename ?></p>
            <div class="text-center">
                <button class='btn btn-sm col-12 archive' type="submit" name="update_user" value="<?= $Member_id ?>">Promouvoir <?= $Member_name . " " . $Member_forename ?> en admin</button>
                <button class='btn btn-sm col-12 archive' type="submit" name="delete_user" value="<?= $Member_id ?>">Supprimer le membre <?= $Member_name . " " . $Member_forename ?> ?</button>
            </div>
        </form>
    <?php
    endif; ?>
    <?php require "./myincludes/Footer.php"; ?>
</body>

</html>