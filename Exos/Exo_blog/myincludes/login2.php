<?php
//$_POST['user_email'] = "";
//$_POST['user_password'] = "";
$Email = $_POST['user_email'];
$Password = $_POST['user_password'];

require_once "../myincludes/fonctions_utiles.php";

$err = 0;
$err_email = "";
$err_password = "";

if (isset($_POST['user_email'])) {
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $err_email = "L'adresse email n'est pas valide. Veuillez entrer une adresse de type : toto@exemple.com ";
        $err = 1;
    } else {
        $Email = protect_montexte($_POST["user_email"]);
        setcookie('email', $_POST['user_email'], time() + 24 * 60 * 60 * 365);
    }
}

if (isset($_POST['user_password'])) {
    if (strlen($_POST['user_password'] < 7)) {
        $err_password = "Votre mot de passe est trop court";
        $err = 2;
    } else {
        $Password = protect_montexte($_POST['user_password']);
        setcookie('password', $_POST['user_password'], time() + 24 * 60 * 60 * 365);
    }
}
var_dump($Password);
if ($err == 1) {
    echo $err_email;
}
if ($err == 2) {
    echo $err_password;
}

//header('Location:../accueil.php?');
?>


<style>
    /* form {
      width: 600px;
      margin: auto;
      padding: 50px;
    } */
    div {
        margin: 10px;
    }

    select {
        margin: 0px;
    }
</style>

</html>