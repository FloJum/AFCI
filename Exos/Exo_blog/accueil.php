<?php
session_start();
$Email = $_SESSION['user_email'];
$Password = $_SESSION['user_password'];
$UserCook = $_SESSION['user_cookie'];
$_SESSION['user_email'] = $Email;
$_SESSION['user_password'] = $Password;

include "../Exo_blog/myincludes/nav.php";

$Style = "";

if (!empty($_COOKIE['user_pref'])) {
    $User2 = $_COOKIE['user_pref'];
    if ($_COOKIE['user_pref'] == 'noel') {
        $Style = "<link class='css' rel='stylesheet' href='../Exo_blog/css/noel.css'>";
    } else if ($_COOKIE['user_pref'] == 'paques') {
        $Style = "<link class='css' rel='stylesheet' href='./css/paques.css'>";
    }
}
if (isset($_POST['noel'])) {
    setcookie('user_pref', 'noel', time() + 24 * 3600 * 30);
} else if (isset($_POST['paques'])) {
    setcookie('user_pref', 'paques', time() + 24 * 3600 * 30);
}
echo $UserCook;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link id="css" rel="stylesheet" href="./css/custom.css" />
    <?php echo $Style
    ?>
    <title>Document</title>
</head>

<body>
    <div class="accueil">
        <div class="row">
            <h1 class="col-12 text-center">Bienvenue.</h1>
            <p class="col-8 offset-2">Ceci est la page d'accueil de mon site. Saviez-vous que vous pouvez changer le thème des pages en cliquant sur l'un des boutons ci-dessous ? :</p>
            <form method="post" class="col-6 offset-3 text-center">
                <button name="noel" onclick="document.getElementById('css').href='./css/noel.css';">Noël </button>
                <button name="paques" onclick="document.getElementById('css').href='./css/paques.css';">Pâques</button>
            </form>
        </div>
    </div>

</body>

</html>