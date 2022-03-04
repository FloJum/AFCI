<?php
session_start();
if (!empty($_COOKIE['user'])) {
    $User2 = $_COOKIE['user'];
    header("Location:index.php");
}


require_once "./myincludes/fonctions_utiles.php";
$err = null;
// $Logins = array(
//     "demo@dwwm.fr" => "laon",
//     "admin@dwwm.fr" => "SecretX",
//     "fjum@gmail.com" => "lol"
// );
$Login = array ();
$Login [0] = array ('username' => 'foo', 'password' => 'foo123', 'role' => 'administrator');

$Usermail = isset($_POST['user_email']) ? protect_montexte($_POST['user_email']) : '';
$Userpass = isset($_POST['user_password']) ? $_POST['user_password'] : '';

// if ($Logins[$Usermail] = $Logins[$Userpass]) {
//     setcookie('usermail', $_POST['user_email'], time() + 24 * 3600 * 365);
//     setcookie('user_logged', 'logged', time() + 24 * 3600 * 30);
//     header('Location:index.php?');
// } else {
//     if ($Logins[$Usermail] != $Userpass) {
//         $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
//     }
// }
if (isset($_POST['user_email']))
foreach ($Logins as $mail => $pass) {
    if ($mail == $Usermail && $pass == $Userpass) {
        setcookie('usermail', $_POST['user_email'], time() + 24 * 3600 * 365);
        setcookie('user_logged', 'logged', time() + 24 * 3600 * 30);
        header('Location:index.php?');
    } else {
        $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <form action="" method="post" class="formulaire p-0 col-6 offset-3">
                <div class="text-center">
                    <h3 class="text-decoration-underline">Veuillez vous connecter :</h3>
                </div>
                <div class="form-row mx-0">
                    <label for="emailinput" class="col-4 offset-2">Adresse email :</label>
                    <input type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />
                </div>
                <div class="form-row mx-0">
                    <label for="password" class="col-4 offset-2">Votre mot de passe :</label>
                    <input type="password" id="password" name="user_password" required />
                </div>
                <div class="text-center">
                    <button type="submit" name="btnsubmit" value="envoyer">Se connecter</button> <?= $err ?>
                </div>
            </form>
        </div>
        <!-- <form method="post">
                    <label for="emailinput">Adresse email:</label>
                    <input type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />

                    <div>
                        <label for="password">Votre mot de passe :</label>
                        <input type="password" id="password" name="user_password" minlength="7" required />
                    </div>

                    <div>
                        <button type="submit" name="btnsubmit" value="envoyer">Se connecter</button> <?= $err ?>
                    </div>
                </form> -->


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<style>
    .formulaire {
        margin-top: 200px;
        background-color: beige;
        border-radius: 20px;
        border: 1px solid #033c73;
    }

    h3 {
        padding: 30px 0px;
    }

    .formulaire div {
        margin: 40px;
    }

    input {
        background-color: #b3c7d6ff !important;
        resize: none;
        border: 1px solid #0063b2ff !important;
    }

    button[type="submit"] {
        background-color: #32936f !important;
        color: whitesmoke;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #0063b2ff;
        margin-top: 30x;
        padding: 5px 30px;
    }

    button[type="submit"]:hover {
        background-color: whitesmoke !important;
        color: #32936f;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #32936f !important;
    }
</style>