<?php
$b = "<br>";
$br = "<br><br>";

$Name = $_GET['user_name'];
$Forename = $_GET['user_forename'];
$Gender = $_GET['user_gender'];
$FamilyStatus = $_GET['user_family_status'];
$Password = $_GET['user_password'];
$Passion = $_GET['user_passion'];
$Hobbies = $_GET['user_hobbies'];

function display1()
{
    global $b, $Name, $Forename, $Gender, $FamilyStatus, $Password, $Passion, $Hobbies;

    echo"<body><div class='a'> <div class='row'> <div class='col-6 offset-3 bg-primary text-white'>";
    echo "<h4>Vous avez saisi les informations suivantes :</h4>" . $b;
    echo "Vous vous appelez : $Name $Forename $b";
    if ($Gender == 'Femme') {
        echo "Vous êtes du genre : $Gender $b";
        if ($FamilyStatus == "marié") {
            echo "Vous êtes mariée.$b";
        } else {
            echo "Vous n'êtes pas mariée.$b";
        }
    } else if ($Gender == 'Homme') {
        echo "Vous êtes du genre : $Gender $b";
        if ($FamilyStatus == "marié") {
            echo "Vous êtes marié.$b";
        } else {
            echo "Vous n'êtes pas marié.$b";
        }
    } else {
        echo "Vous êtes du genre : $Gender $b";
        if ($FamilyStatus == "marié") {
            echo "Vous êtes marié(e).$b";
        } else {
            echo "Vous n'êtes pas marié(e).$b";
        }
    }
    echo "Votre mot de passe est : $Password $b";
    echo "Votre passion est : $Passion $b";
    echo "Vos hobbies sont : $Hobbies $b";


    echo"</div></div></div></body>";
}
display1();
var_dump($_GET);
?>

<style>
    body{
        background-color: #9fa8a3;
    }
.a{
    /* background-color: #c5d5cb; */
    /* background-color: #9fa8a3; */
    background-color: #e3e0cf;
    /* color: #c5d5cb; */
    /* color: #9fa8a3; */
    /* color: #e3e0cf; */
    color: black;
    margin:auto;
    width:600px;
    border: solid 1px black;
    padding: 100px 0px;
}
h4{
    margin:auto;
}
</style>