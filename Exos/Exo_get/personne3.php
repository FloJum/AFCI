<?php
session_start();
$Name = $_POST['user_name'] ?? '';
$Forename = $_POST['user_forename'] ?? '';
$Gender = $_POST['user_gender'] ?? '';
$FamilyStatus = $_POST['user_family_status'] ?? '';
$Password = $_POST['user_password'] ?? '';
$Passion = $_POST['user_passion'] ?? '';
$Hobbys = $_POST['user_hobbys'] ?? '';

if (['user_gender' == 'Femme']){
    $Gender = "une femme";
    if (['user_family_status'] == "marié") {
        $FamilyStatus = "mariée";
    }
} else if (['user_gender' == 'Homme']){
    $Gender = "un homme";
    if (['user_family_status'] == "marié") {
        $FamilyStatus = "marié";
    }
} else if (['user_gender' == 'Non-binaire']) {
    $Gender = "non-binaire";
    if (['user_family_status'] == "marié") {
        $FamilyStatus = "marié(e)";
    }
}
// foreach ($_POST["user_hobbys"] as $val) {
//     echo $val . ", ";
// }

$_SESSION['user_name'] = $Name;
$_SESSION['user_forename'] = $Forename;
$_SESSION['user_gender'] = $Gender;
$_SESSION['user_family_status'] = $FamilyStatus;
$_SESSION['user_password'] = $Password;
$_SESSION['user_passion'] = $Passion;
$_SESSION['user_hobbys'] = $Hobbys;

?>

<h3><a href="affichage3.php">Afficher</a></h3>