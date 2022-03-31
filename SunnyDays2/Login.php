<?php
session_start();
require_once "./myincludes/fonctions_utiles.php";
include "./myincludes/Header.php";
$err = null;

if (isset($_POST['btnconnex']) && $_POST['btnconnex'] == 'Connexion') {
    if ((isset($_POST['user_email']) && !empty($_POST['user_email'])) && (isset($_POST['user_password']) && !empty($_POST['user_password']))) {
        $conn = mysqli_connect("localhost", "root", "", "sunnydays");
        if (mysqli_connect_error($conn)) {
            die("Connexion à la BDD échouée.");
        }
        $email = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
        $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
        $sql = "SELECT * FROM users WHERE email LIKE '$email'";
        $req = mysqli_query($conn, $sql);
        if (mysqli_num_rows($req) > 0) {
            $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
            if (password_verify($password, $data['password'])) {
                $_SESSION['user_email'] = $data['email'];
                $_SESSION['user_name'] = $data['name'];
                $_SESSION['user_forename'] = $data['forename'];
                if ($data['user_type'] == '["admin"]') {
                    $_SESSION['user_type'] = $data['user_type'];
                } else {
                    $_SESSION['user_type'] = $data['user_type'];
                }
                mysqli_free_result($req);
                mysqli_close($conn);
                header('Location:Index.php?');
            }else {
                $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
            }
        } else {
            $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<title>Connexion</title>
<html lang="en">
    <body>

    <form method="post">
                <div class="form-row mx-0">
                    <label for="emailinput" class="col-4 offset-2">Adresse email :</label>
                    <input type="mail" id="emailinput" name="user_email" placeholder="toto@exemple.com" required />
                </div>
                <div class="form-row mx-0">
                    <label for="password" class="col-4 offset-2">Votre mot de passe :</label>
                    <input type="password" id="password" name="user_password" required />
                </div>
                    <button type="submit" name="btnconnex" value="Connexion">Se connecter</button> <?= $err ?>
            </form>
            <form action="Register.php" method="post" class="formulaire col-5 offset-1 ">
                    <button type="submit" name="btninsc" value="Inscredir">S'inscrire</button>
            </form>
        <?php include "./myincludes/Footer.php"; ?>
    </body>
</html>