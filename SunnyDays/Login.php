<?php
session_start();
require_once "./myincludes/fonctions_utiles.php";
$Err_log = null;

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
            } else {
                $eErr_log = "<p class='error'>L'adresse mail ou le mot de passe est erroné !</p>";
            }
        } else {
            $Err_log = "<p class='error'>L'adresse mail ou le mot de passe est erroné !</p>";
        }
    }
}
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
                        <label for="emailinput">Adresse email :</label>
                        <input class="form-control" type="mail" id="emailinput" name="user_email" placeholder="Entrez votre mail" required />
                    </div>
                    <div class="col-md-6">
                        <label for="password">Votre mot de passe :</label>
                        <input class="form-control" type="password" id="password" name="user_password" placeholder="Entrez votre mot de passe" required />
                    </div>
                </div>
                <?php echo !empty($Err_log) ? $Err_log : ""; ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="btnconnexion" class="btnnews" name="btnconnex" value="Connexion">Se connecter</button>
                        </div>
                    </div>

        </form>
        <form action="Register.php" method="post">
            <div class="col-md-12">
                <button type="submit" id="btnregister" class="btnnews" name="btninsc" value="Inscredir">S'inscrire</button>
            </div>
        </form>
    </div>
</header>


<body>
    <?php include "./myincludes/Footer.php"; ?>
</body>

</html>