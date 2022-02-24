<?php
$b = "<br>";
$br = "<br><br>";

$Name = $_GET['user_name'];
$Forename = $_GET['user_forename'];
$Gender = $_GET['user_gender'];
$FamilyStatus = $_GET['user_family_status'];
$Password = $_GET['user_password'];
$Passion = $_GET['user_passion'];
$Hobbys = $_GET['user_hobbys'];

$err_name = "";
$err_forename = "";
$err_gender = "";
$err_familyStatus = "";
$err_password = "";
$err_passion = "";
$err_hobbys = "";

if (isset($_GET['user_name'])) {
    if ($Name ==""){
        $err_name = "Vous devez entrer un nom.";
        echo$err_name;
        $err = 1;
    }
}
if (isset($_GET['user_forename'])) {
    if ($Forename ==""){
        $err_forename = "Vous devez entrer un prénom.";
        echo$err_forename;
    }
}
if (isset($_GET['user_gender'])) {
    if ($Gender ==""){
        $err_gender = "Vous devez choisir un genre.";
        echo$err_gender;
    }
}
if (isset($_GET['user_family_status'])) {
    if ($FamilyStatus ==""){
        $err_familyStatus = "Vous devez cocher une case.";
        echo$err_family_status;
    }
}
if (isset($_GET['user_password'])) {
    if ($Password ==""){
        $err_password = "Vous devez entrer un mot de passe.";
        echo$err_password;
    }
}
if (isset($_GET['user_passion'])) {
    if ($Passion ==""){
        $err_passion = "Vous devez choisir une passion.";
        echo$err_passion;
    }
}
if (isset($_GET['user_hobbys'])) {
    if ($Hobbys ==""){
        $err_hobbys = "Vous devez choisir au moins un hobby.";
        echo$err_hobbys;
    }
}

if ($err == 1){
    echo'<a href="javascript:history.back()">Erreurs : retour à la page récente.</a>';
}

$Str="";
$Str.= "nom= ".$Name;
$Str.= " &prénom= ".$Forename;
$Str.= " &genre= ".$Gender;
$Str.= " &statut_marital= ".$FamilyStatus;
$Str.= " &password= ".$_GET["user_password"];
$Str.= " &passion= ".$Passion;
$Chaine= "<ul>";
// foreach ($_GET["user_hobbys"] as $Val) {
//     $Chaine.="<li>.$Val.</li>";
// }
// $Chaine.="</ul>";
foreach ($Hobbys as $Val) {
    $Chaine.="<li>$Val</li>";
}
$Chaine.="</ul>";
$Str.="&hobbys=".$Chaine;
// echo$Str;
header('Location:affichage.php?'.$Str);

                     
?>
