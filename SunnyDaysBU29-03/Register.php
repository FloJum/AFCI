<?php
include "./myincludes/Header.php";
include "Controller.php";
?>

<!DOCTYPE html>
<title>Inscription</title>
<html lang="en">

<body>

    <div class="row">
        <form method="post" class="formulaire p-0 col-6 offset-3">

            <div class="form-row ">
                <label for="nameinput">Nom :</label>
                <input type="text" id="nameinput" name="user_name" placeholder="Votre nom" required />
            </div>
            <div class="form-row ">
                <label for="forenameinput">Prénom :</label>
                <input type="text" id="forenameinput" name="user_forename" placeholder="Votre prénom" required />
            </div>
            <div class="form-row ">
                <label for="emailinput">Adresse email* :</label>
                <input type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />
                <!-- La lignea en dessous ne s'affiche qu'en cas d'erreur d'entrée dans le champ -->
                <p class="err text-center"><?php echo !empty($emailerr) ? $emailerr : ""; ?></p>
                <!-- --------------------------------------------------------------------------- -->
            </div>
            <div class="form-row ">
                <label for="passinput" class="col-3 offset-1">Mot de passe* :</label>
                <input class="col-3" type="password" id="passinput" name="user_password" placeholder="Votre mot de passe" minlength="8" maxlength="15" required />
            </div>
            <div class="form-row ">
                <label for="passinput2" class="col-3 offset-1">Confirmer le mot de passe* :</label>
                <input class="col-3" type="password" id="passinput2" name="user_password2" placeholder="Votre mot de passe" required />
                <!-- Les lignes en dessous ne s'affichent qu'en cas d'erreur d'entrée dans les champs -->
                <p class="err text-center"><?php echo !empty($pass2err) ? $pass2err : ""; ?></p>
                <p class="err text-center"><?php echo !empty($mdperr) ? $mdperr : ""; ?></p>
                <p class="err text-center"><?php echo !empty($createerr) ? $createerr : ""; ?></p>
                <!-- --------------------------------------------------------------------------- -->
            </div>
            <input type="submit" name="btnregister" value="S'inscrire">
        </form>
    </div>

    <?php require "./myincludes/Footer.php"; ?>
</body>

</html>

<style>
    .err{
        color:red;
        margin-top: 20px;
    }
</style>