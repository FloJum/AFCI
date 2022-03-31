<?php
include "Controller.php";
include "./myincludes/Header.php";

?>

<!DOCTYPE html>
<title>Contact</title>
<html lang="en">
    <body>
    <form method="post" class="formulaire p-0 col-6 offset-3">
                <div class="row align-items-baseline" id="formcont">
                    <h3 class="col-7 offset-1 text-center pr-0">Formulaire de contact :</h3>
                    <h6 class="col-4 text-center small pl-0 ">* champ obligatoire</h6>
                </div>
                <div class="form-row mx-0">
                    <label for="nominput" class="col-2 offset-1">Nom* :</label>
                    <input class="col-3" type="text" id="nominput" name="user_name" placeholder="Votre nom" value="<?= $Ch_name?>" required />
                    <label for="prenominput" class="col-2 text-center">Prénom* :</label>
                    <input class="col-3" type="text" id="prenominput" name="user_forename" placeholder="Votre prénom" value="<?= $Ch_forename?>" required />
                </div>
                <div class="form-row mx-0">
                    <label for="emailinput" class="col-2 offset-1">Adresse email* :</label>
                    <input class="col-3" type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" value="<?= $Ch_email?>" required />
                </div>
                <div class="form-row mx-0">
                    <label for="message" class="col-2 offset-1">Posez votre question :</label>
                </div>
                <div class="col-11 bg-warning ">
                    <textarea class="form-control" id="messageinput" name="user_message" placeholder="Entrez votre question" rows="3" cols="10"></textarea>
                </div>
                <div class="row text-center mx-0 ">
                    <input type="reset" value="Effacer" class="col-2 offset-1">
                    <input type="submit" name="btnsubmit" value="Envoyer" class="col-2 offset-5">
                </div>
            </form>
    
        <?php include "./myincludes/Footer.php"; ?>
    </body>
</html>