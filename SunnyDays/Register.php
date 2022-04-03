<?php
include "Controller.php";
isset($_SESSION['emailErr']) ? $emailerr= $_SESSION['emailErr'] : "";
isset($_SESSION['mdperr'])?$mdperr = $_SESSION['mdperr']:""; 
isset($_SESSION['createerr']) ?$createerr = $_SESSION['createerr']:"";
?>

<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div id="divblockheader">
        <form class="register" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nameinput">NOM</label>
                        <input class="form-control" type="text" id="nameinput" name="user_name" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="forenameinput">PRENOM</label>
                        <input class="form-control" type="text" id="forenameinput" name="user_forename" placeholder="Entrez votre prénom" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="emailinput">MAIL</label>
                        <input class="form-control" type="mail" id="emailinput" name="user_email" placeholder="Entrez votre mail" required>
                    </div>
                    <div class="col-md-6">
                        <label for="emailinput2">CONFIRMEZ LE MAIL</label>
                        <input id="mailconfirm" class="form-control" type="mail" id="emailinput2" name="user_email2" placeholder="Confirmer votre mail" required>
                    </div>
                </div>
                <?php echo !empty($emailerr) ? $emailerr : ""; ?>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="passinput">MOT DE PASSE</label>
                        <input class="form-control" type="password" id="passinput" name="user_password" placeholder="Entrer votre mot de passe" required>
                    </div>
                    <div class="col-md-6">
                        <label for="passinput2">CONFIRMER LE MOT DE PASSE</label>
                        <input class="form-control" type="password" id="passinput2" name="user_password2" placeholder="Confirmer votre mot de passe" required>
                    </div>
                </div>
               <?php echo !empty($mdperr) ? $mdperr : ""; $mdperr=""; echo !empty($createerr) ? $createerr : ""; $createerr = "";?></p>
            </div>

            <button type="submit" id="btnregister" class="btnnews" name="btnregister" value="S'inscrire">S'inscrire</button>
        </form>

    </div>
</header>

<body>



    <?php require "./myincludes/Footer.php";
    $_SESSION['emailErr'] = $_SESSION['mdperr'] = $_SESSION['createerr'] = ""; ?>
</body>

</html>