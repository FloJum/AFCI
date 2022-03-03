<?php
session_start();
include "./myincludes/nav.php";
$Email = $_SESSION['user_email'];
$Password = $_SESSION['user_password'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <title>Document</title>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <form action="" method="post" class="formulaire p-0 col-6 offset-3">
                <div class="row align-items-baseline" id="formcont">
                    <h3 class="col-7 offset-1 text-center pr-0">Formulaire de contact :</h3>
                    <h6 class="col-4 text-center small pl-0 ">* champ obligatoire</h6>
                </div>
                <div class="form-row mx-0">
                    <label for="nominput" class="col-2 offset-1">Nom* :</label>
                    <input class="col-3" type="text" id="nominput" name="user_name" placeholder="Votre nom" required />
                    <label for="prenominput" class="col-2 text-center">Prénom* :</label>
                    <input class="col-3" type="text" id="prenominput" name="user_forename" placeholder="Votre prénom" required />
                </div>
                <div class="form-row mx-0">
                    <label for="emailinput" class="col-2 offset-1">Adresse email* :</label>
                    <input class="col-3" type="mail" id="emailinput" name="user_email" value="<?= $Email ?>" required />
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
        background-color: beige;
        border-radius: 20px;
        border: 1px solid #033c73;
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