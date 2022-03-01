<?php
require_once "../myincludes/fonctions_utiles.php";
$init_email="fjum@gmail.com";
$init_password="Trolololol";
$Email ="";
$Password="";

if (isset($_POST['user_email']) && isset($_POST['user_password'])){
    $Email = protect_montexte($_POST["user_email"]);
    $Password = $_POST['user_password'];
}

if ($Email === $init_email && $Password === $init_password) {
    header('Location:../accueil.php?');
} else {
    echo"L'adresse mail ou le mot de passe est erroné";
}
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
            <div class="col-6 offset-3">
                <h1>Connexion</h1>
                <form method="post">
                    <label for="emailinput">Adresse email:</label>
                    <input type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />
            </div>
            <div>
                <label for="password">Votre mot de passe :</label>
                <input type="password" id="password" name="user_password" minlength="7" required />
            </div>

            <div>
                <button type="submit" name="btnsubmit" value="envoyer">Se connecter</button>
            </div>
            </form>
        </div>

        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>