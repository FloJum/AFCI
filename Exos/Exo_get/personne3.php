<?php
session_start();
$Name = $_POST['user_name'];
$Forename = $_POST['user_forename'];
$Gender = $_POST['user_gender'];
$FamilyStatus = $_POST['user_family_status'];
$Password = $_POST['user_password'];
$Passion = $_POST['user_passion'];
$Hobbys = "";
foreach ($_POST["user_hobbys"] as $val) {
    $Hobbys .= $val . ", ";
}
$Hobbys = rtrim($Hobbys, ", ");


require_once "../fonctions_utiles.php";

$err = "";
$err_name = "";
$err_forename = "";
$err_gender = "";
$err_familyStatus = "";
$err_password = "";
$err_passion = "";
$err_hobbys = "";

if (isset($_POST['user_name'])) {
    if ($Name == "") {
        $err_name = "Vous devez entrer un nom.";
        $err = 1;
    }
}
if (isset($_POST['user_forename'])) {
    if ($Forename == "") {
        $err_forename = "Vous devez entrer un prénom.";
        $err = 1;
    }
}
if (isset($_POST['user_gender'])) {
    if ($Gender == "") {
        $err_gender = "Vous devez choisir un genre.";
        $err = 1;
    }
}
if (isset($_POST['user_family_status'])) {
    if ($FamilyStatus == "") {
        $err_familyStatus = "Vous devez cocher une case.";
        $err = 1;
    }
}
if (isset($_POST['user_password'])) {
    if ($Password == "") {
        $err_password = "Vous devez entrer un mot de passe.";
        $err = 1;
    }
}
if (isset($_POST['user_passion'])) {
    if ($Passion == "") {
        $err_passion = "Vous devez choisir une passion.";
        $err = 1;
    }
}
if (isset($_POST['user_hobbys'])) {
    if ($Hobbys == "") {
        $err_hobbys = "Vous devez choisir au moins un hobby.";
        $err = 1;
    }
}
if ($err == 1) {
    echo '<a href="javascript:history.back()">Erreurs : retour à la page récente.</a>';
    echo $err_name;
    echo $err_forename;
    echo $err_gender;
    echo $err_familyStatus;
    echo $err_password;
    echo $err_passion;
    echo $err_hobbys;
}

$Name = protect_montexte($Name);
$Forename = protect_montexte($Forename);

switch ($Gender) {
    case "Femme":
        $Gender = "une femme";
        if ($FamilyStatus == "marié") {
            $FamilyStatus = "mariée";
        } else {
            $FamilyStatus = "pas mariée";
        }
        break;
    case "Homme":
        $Gender = "un homme";
        if ($FamilyStatus == "marié") {
            $FamilyStatus = "marié";
        } else {
            $FamilyStatus = "pas marié";
        }
        break;
    case "Non-binaire":
        $Gender = "non-binaire";
        if ($FamilyStatus == "marié") {
            $FamilyStatus = "marié(e)";
        } else {
            $FamilyStatus = "pas marié(e)";
        }
        break;
}
$_SESSION['user_name'] = $Name;
$_SESSION['user_forename'] = $Forename;
$_SESSION['user_gender'] = $Gender;
$_SESSION['user_family_status'] = $FamilyStatus;
$_SESSION['user_password'] = $Password;
$_SESSION['user_passion'] = $Passion;
$_SESSION['user_hobbys'] = $Hobbys;

?>

<h3><a href="affichage3.php">Afficher</a></h3>