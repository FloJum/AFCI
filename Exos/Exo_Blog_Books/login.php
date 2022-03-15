<?php
require_once "./myincludes/fonctions_utiles.php";
include "./myincludes/nav.php";
$err = null;

if (isset($_POST['btnconnex']) && $_POST['btnconnex'] == 'Connexion') {
    if ((isset($_POST['user_email']) && !empty($_POST['user_email'])) && (isset($_POST['user_password']) && !empty($_POST['user_password']))) {
        $Logdb = mysqli_connect("localhost", "root", "", "books");
        if (mysqli_connect_error($Logdb)) {
            die("Connexion échouée");
        }
        $mail = $_POST['user_email'];
        $password = $_POST['user_password'];
        $sql = "SELECT count(*) FROM users WHERE mail='$mail' AND password='$password'";
        $req = mysqli_query($Logdb, $sql);
        $data = mysqli_fetch_array($req);
        var_dump($data);
        

        if ($data[0] == 1) {
            session_start();
            $_SESSION['mail'] = $_POST['user_email'];
            $sql = "SELECT * FROM users WHERE mail='$mail' AND password='$password'";
            $req = mysqli_query($Logdb, $sql);
            $data = mysqli_fetch_array($req);
            $_SESSION['pseudo'] = $data['pseudo'];
            if ($data['role'] == 'admin') {
                $_SESSION['role'] = $data['role'];
                echo $_SESSION['role'];
                mysqli_free_result($req);
                mysqli_close($Logdb);
                header('Location:index.php?');
                exit();
            } else {
                $_SESSION['role'] = $data['role'];
                echo $_SESSION['role'];
                mysqli_free_result($req);
                mysqli_close($Logdb);
                header('Location:index.php?');
                exit();
            }
        } elseif ($data[0] == 0) {
            $erreur = 'Compte non reconnu.';
        } else {
            $erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
        }
    } else {
        $erreur = 'Au moins un des champs est vide.';
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
        <div class="row">
            
            <form method="post" class="formulaire p-0 col-5 offset-1">
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
                    <button type="submit" name="btnconnex" value="Connexion">Se connecter</button> <?= $err ?>
                </div>
            </form>
            <form action="register.php" method="post" class="formulaire col-5 offset-1 ">
                <div class="text-center">
                    <h3 class="text-decoration-underline">Pas encore membre ? :</h3>
                </div>
                <div class="text-center">
                    <button type="submit" name="btninsc" value="Inscredir">S'inscrire</button>
                </div>
            </form>
           
        </div>


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<style>
    .formulaire {
        margin-top: 200px;
        background-color: #ADEFD1FF;
        color: #00203FFF;
        border-radius: 20px;
        border: 1px solid #00203FFF;
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
        border: 1px solid #32936f;
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