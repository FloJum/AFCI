<?php
// session_start();
// if (!empty($_COOKIE['user'])) {
//     $User2 = $_COOKIE['user'];
//     header("Location:index.php");
// }


require_once "./myincludes/fonctions_utiles.php";
$err = null;

// $Login = array();
// $Login[0] = array('user_email' => 'demo@dwwm.fr', 'user_password' => 'laon', 'role' => 'visiteur');
// $Login[1] = array('user_email' => 'admin@dwwm.fr', 'user_password' => 'SecretX', 'role' => 'admin');
// $Login[2] = array('user_email' => 'fjum@gmail.com', 'user_password' => 'lol', 'role' => '');

// $Usermail = isset($_POST['user_email']) ? protect_montexte($_POST['user_email']) : '';
// $Userpass = isset($_POST['user_password']) ? $_POST['user_password'] : '';


// if (isset($_POST['user_email'])) {
//     for ($i = 0; $i < count($Login); $i++) {
//         if (($Login[$i]['user_email'] == $Usermail) && ($Login[$i]['user_password'] == $Userpass)) {
//             setcookie('usermail', $_POST['user_email'], time() + 24 * 3600 * 365);
//             setcookie('user_logged', 'logged', time() + 24 * 3600 * 30);
//             $Role = $Login[$i]['role'];
//             switch ($Role) {
//                 case "admin":
//                     setcookie('role', 'admin', time() + 24 * 3600 * 30);
//                     $_SESSION['role'] = $Role;
//                     header('Location:index.php?');
//                     break;
//                 case "visiteur":
//                     setcookie('role', 'visiteur', time() + 24 * 3600 * 30);
//                     $_SESSION['role'] = $Role;  
//                     header('Location:index.php?');
//                     break;
//                 case "":
//                     header('Location:index.php?');
//                     break;
//             }
//         } else {
//             $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
//         }
//     }
// }
if (isset($_POST['btnconnex']) && $_POST['btnconnex'] == 'Connexion') {
    if ((isset($_POST['user_email']) && !empty($_POST['user_email'])) && (isset($_POST['user_password']) && !empty($_POST['user_password']))) {
        $Logdb = mysqli_connect("localhost", "root", "", "user");
        if (mysqli_connect_error($Logdb)) {
            die("Connexion échouée");
        }
        $mail = $_POST['user_email'];
        $password = $_POST['user_password'];
        $sql = "SELECT count(*) FROM member WHERE mail='$mail' AND password='$password'";
        $req = mysqli_query($Logdb, $sql);
        $data = mysqli_fetch_array($req);
        var_dump($data);
        

        if ($data[0] == 1) {
            session_start();
            $_SESSION['mail'] = $_POST['user_email'];
            $sql = "SELECT role FROM member WHERE mail='$mail' AND password='$password'";
            $req = mysqli_query($Logdb, $sql);
            $data = mysqli_fetch_array($req);
            var_dump($data);
            if ($data['role'] == 'admin') {
                $_SESSION['role'] = "admin";
                mysqli_free_result($req);
                mysqli_close($Logdb);
                header('Location:index.php?');
                exit();
            } else {
                $_SESSION['role'] = "visiteur";
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
                    <button type="submit" name="btnconnex" value="Connexion">Se connecter</button> <?= $err ?>
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