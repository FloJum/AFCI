<?php
include "./myincludes/nav.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <form action="indexaction.php" method="post" class="formulaire p-0 col-6 offset-3">
                <div class="row align-items-baseline" id="formcont">
                    <h3 class="col-7 offset-1 text-center pr-0">Formulaire d'inscription :</h3>
                    <h6 class="col-4 text-center small pl-0 ">* champ obligatoire</h6>
                </div>
                <div class="form-row mx-0">
                    <label for="pseudoinput" class="col-2 offset-1">Pseudo* :</label>
                    <input class="col-3" type="text" id="pseudoinput" name="user_pseudo" placeholder="Votre pseudo" required />
                </div>
                <div class="form-row mx-0">
                    <label for="emailinput" class="col-2 offset-1">Adresse email* :</label>
                    <input class="col-3" type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />
                </div>
                <div class="form-row mx-0">
                    <label for="passinput" class="col-2 offset-1">Mot de passe* :</label>
                    <input class="col-3" type="password" id="passinput" name="user_password" placeholder="Votre pseudo" required />
                </div>
                <div class="row text-center mx-0 ">
                    <input type="submit" name="btnregister" value="S'inscrire" class="col-2 offset-5">
                </div>
            </form>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    /****************************************** FORMULAIRE ************************************/
    .formulaire {
        margin-top: 30px;
        background-color: #ADEFD1FF;
        color: #00203FFF;
        border-radius: 20px;
        border: 1px solid #00203FFF;
    }

    .formulaire div {
        margin: 20px;
    }

    input,
    textarea {
        background-color: #b3c7d6ff !important;
        resize: none;
        border: 1px solid #0063b2ff !important;
    }

    input[type="reset"] {
        background-color: #f45b69 !important;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #f45b69 !important;
    }

    input[type="submit"] {
        background-color: #32936f !important;
        color: whitesmoke;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #32936f !important;
    }

    input[type="reset"]:hover {
        background-color: whitesmoke !important;
        color: red;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid red !important;
    }

    input[type="submit"]:hover {
        background-color: whitesmoke !important;
        color: #32936f;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #32936f !important;
    }
</style>