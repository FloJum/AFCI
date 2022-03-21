<?php
session_start();
require_once "./myincludes/fonctions_utiles.php";
include "./myincludes/nav.php";
$err = null;

// Jean Mich = Mich2 Tutu= Danseur2 Wolf =Lol2   Demo = La0n Admin = SecretX1

if (isset($_POST['btnconnex']) && $_POST['btnconnex'] == 'Connexion') {
    if ((isset($_POST['user_email']) && !empty($_POST['user_email'])) && (isset($_POST['user_password']) && !empty($_POST['user_password']))) {
        $conn = mysqli_connect("localhost", "root", "", "books");
        if (mysqli_connect_error($conn)) {
            die("Connexion à la BDD échouée.");
        }
        $mail = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
        $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
        $sql = "SELECT * FROM users WHERE mail LIKE '$mail'";
        $req = mysqli_query($conn, $sql);
        if (mysqli_num_rows($req) > 0) {
            $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
            if (password_verify($password, $data['password'])) {
                $_SESSION['mail'] = $mail;
                $_SESSION['pseudo'] = $data['pseudo'];
                if ($data['role'] == '["admin"]') {
                    $_SESSION['role'] = $data['role'];
                } else {
                    $_SESSION['role'] = $data['role'];
                }
                mysqli_free_result($req);
                mysqli_close($conn);
                header('Location:index.php?');
            }else {
                $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
            }
        } else {
            $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est faux.</p>";
        }
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
    <link rel="stylesheet" href="./css/custom.css" />
    <title>Connexion</title>
</head>

<body>
    <main class="container">
        <div class="login row">

            <form method="post" class="formulaire col-5 offset-1">
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
                    <button class="valid" type="submit" name="btnconnex" value="Connexion">Se connecter</button> <?= $err ?>
                </div>
            </form>
            <form action="register.php" method="post" class="formulaire col-5 offset-1 ">
                <div class="text-center">
                    <h3 class="text-decoration-underline">Pas encore membre ? :</h3>
                </div>
                <div class="text-center">
                    <button class="valid" type="submit" name="btninsc" value="Inscredir">S'inscrire</button>
                </div>
            </form>

        </div>


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
