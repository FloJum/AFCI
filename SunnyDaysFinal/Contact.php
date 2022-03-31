<?php
include "Controller.php";
?>

<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
    <form class="register" method="post" class="formulaire p-0 col-6 offset-3">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="nominput">NOM</label>
                    <input class="form-control" type="text" id="nominput" name="user_name" placeholder="Entrez votre nom" value="<?= $Ch_name ?>" required />
                </div>
                <div class="col-md-4">
                    <label for="prenominput">PRENOM</label>
                    <input class="form-control" type="text" id="prenominput" name="user_forename" placeholder="Entrez votre prénom" value="<?= $Ch_forename ?>" required />
                </div>
                <div class="col-md-4">
                    <label for="emailinput">ADRESSE MAIL </label>
                    <input class="form-control" type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" value="<?= $Ch_email ?>" required />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label for="messageinput">VOTRE MESSAGE</label>
                <textarea class="form-control" id="messageinput" name="user_message" placeholder="Entrez votre message" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" name="btnsubmit" value="Envoyer" class="btnnews">Envoyer</button>
    </form>
    </div>
</header>

<body>
    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>