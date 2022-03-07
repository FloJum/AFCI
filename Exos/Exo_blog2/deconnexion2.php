<?php
session_start();
include "../Exo_blog/myincludes/nav.php";

if (empty($_COOKIE['user_logged'])) {
    header('Location:index.php?');
}

if (!empty($_GET['action'] && $_GET['action'] === "deconnecter")) {
    unset($_COOKIE['user_logged']);
    setcookie('user_logged',null, time() -5);
    unset($_COOKIE['role']);
    setcookie('role',null, time()-5);
    header("Location:index.php");
    session_destroy();
} else {

}

?>


<body>
    <main class="container-fluid">
        <div class="row">
            <form action="deconnexion.php?action=deconnecter" method="post" class="formulaire p-0 col-6 offset-3">
                <div class="text-center">
                    <h3 class="text-decoration-underline">Pour vous déconnecter :</h3>
                </div>
                <div class="text-center">
                <button type="submit">Se déconnecter</button>
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
    h3{
        padding: 30px 0px;
    }
    .formulaire div {
        margin: 40px;
    }
    button[type="submit"] {
        background-color: #f45b69 !important;
        color: whitesmoke !important;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid #f45b69;
        padding:5px 30px;
    }
    button[type="submit"]:hover {
        background-color: whitesmoke !important;
        color: red !important;
        font-weight: bold;
        border-radius: 20px;
        border: 1px solid red !important;
    }
</style>