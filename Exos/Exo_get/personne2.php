<?php
$b = "<br>";
$br = "<br><br>";

$erreur_name = "";
$erreur_forename = "";
$erreur_gender = "";
$erreur_familystatus = "";
$erreur_password = "";
$erreur_passion = "";
$erreur_hobbys = "";

$Name = $_POST['user_name'];
$Forename = $_POST['user_forename'];
$Gender = $_POST['user_gender'];
$FamilyStatus = $_POST['user_family_status'];
$Password = $_POST['user_password'];
$Passion = $_POST['user_passion'];
$Hobbys = $_POST['user_hobbys'];


function display2()
{
    global $b, $Name, $Forename, $Gender, $FamilyStatus, $Password, $Passion, $Hobbies, $val;
    if (isset($_POST)) {
        if ($_POST["user_name"] == "") {
            $erreur_name = "Vous n'avez pas rempli le champ";
        } else  if ($_POST["user_forename"] == "") {
            $erreur_forename = "Vous n'avez pas rempli le champ";
        } else  if ($_POST["user_gender"] == "") {
            $erreur_gender = "Vous n'avez pas spécifié de genre";
        } else  if ($_POST["user_familystatus"] == "") {
            $erreur_familystatus = "Vous n'avez pas coché la case";
        } else  if ($_POST["user_password"] == "") {
            $erreur_password = "Veuillez saisir un mot de passe";
        } else  if ($_POST["user_passion"] == "") {
            $erreur_passion = "Vous n'avez pas sélectionné de passion";
        } else  if ($_POST["user_hobbies"] == "") {
            $erreur_hobbys = "Vous n'avez pas choisi de hooby";
        } else {
            echo "<table><tr><td>'Nom'</td><td>'Prénom'</td><td>'Genre'</td><td>'Statut marital'</td><td>'Mot de passe'</td><td>'Passion'</td><td>'Hobbies'</td>";
            echo "<tr><td>$Name</td><td>$Forename</td><td>$Gender</td><td>$FamilyStatus</td><td>$Password</td><td>$Passion</td><td>";
            foreach ($_POST["user_hobbys"] as $val) {
                echo $val . ", ";
            }
            "</td></tr>";
            echo "</table>";
        }
    }
}
display2();
var_dump($_POST);
/*function display3() {
    if  (isset($_POST)){
        echo"<table  border='1'>";
        foreach ($_POST as $a =>$b){
            if($a == 'envoyer') continue;
            echo"<tr>";
            echo"<td>$a</td>";
            if(!is_array($b)){
                echo"<td>$b</td>";
            } else {
                echo"<td></table>";
                foreach ($b as $k => $v){
                    echo"<tr>";
                    echo"<td>$v</td>";
                    echo"</tr>";
                }
                echo"</td></table>";
            }
            echo"</tr>";
        }
    }
}
display3();
var_dump($_POST);*/
?>

<style>
    body {
        background-color: #9fa8a3;
    }

    table {
        margin: auto;
        border: 1px solid black;
        border-collapse: collapse;
        /* frame='border'; border='1' cellpadding='30%' cellspacing='0' style='color : blue' */
    }

    td {
        border: 1px solid black;
        width: 150px;
        text-align: center;
    }
</style>