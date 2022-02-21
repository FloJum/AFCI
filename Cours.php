<?php
function  Essais1()
{
    $var = "texte 1 ";
    echo $var;
}
function Essais2()
{
    global $var;
    echo $var;
}
$var = "text 2 ";
Essais1(); /* retourne texte 1 */
Essais2(); //  retourne text 2
?>
<br>
<?php
function  Essais11()
{
    $var = "texte 11 ";
    echo $var;
}
function Essais21()
{
    $var = "Global ";
    echo $var;
}
$var = "text 21 ";
echo $var;
Essais11();
Essais21();
?>
<br>
<!-- *********************TABLEAU************************** -->
<?php
$villes[0] = "Lille";
$villes[1] = "Reims";
echo "Je vis à $villes[1]<br>";
?>
<br>

<?php
$villes1[] = "Lille";
$villes1[] = "Reims";
for ($i = 0; $i < count($villes1); $i++)
    echo " La ville $i est $villes1[$i]<br>";
?>
<!-- *******************INDEXATION TABLEAU******************* -->
<?php
$UsersInfos["nom"] = "J.Pierre";
$UsersInfos["villes"] = "Reims";
$UsersInfos["job"] = "WebDev";
for (reset($UsersInfos); $key = key($UsersInfos); next($UsersInfos)) {
    $valeur = pos($UsersInfos);
    echo "$key correspond à $valeur. <br>\n";
}
?>
<br>
<?php $jour = array(1 => "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
echo "jour 5: $jour[5]<br>"; ?>
<?php
$jour = array(
    "lun" => "lundi",
    "mar" => "mardi",
    "mer" => "mercredi",
    "jeu" => "jeudi",
    "ven" => "vendredi",
    "sam" => "samedi",
    "dim" => "dimanche",
);
echo "jour mer: " . $jour["mer"] . "<br>"; ?>

<!-- **********************EXO FOR  SUR INDEX TABLEAU******************** -->

<?php
$jour = array(
    "lun" => "lundi",
    "mar" => "mardi",
    "mer" => "mercredi",
    "jeu" => "jeudi",
    "ven" => "vendredi",
    "sam" => "samedi",
    "dim" => "dimanche",
);
for (reset($jour); $key = key($jour); next($jour)) {
    $valeur = pos($jour);
    echo "$key correspond à $valeur. <br>\n";
} ?>

<!-- **********************TABLEAU MULTIDIMENSIONNEL******************** -->
<br>
<?php $villes = array(
    "Nord" => array("Lille", "Reims"),
    "Départ" => array("59", "51", "80")
);
echo $villes["Nord"][1];
?>