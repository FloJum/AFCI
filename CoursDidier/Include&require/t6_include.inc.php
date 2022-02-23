
<?php
$st = 'style="padding:25px;color:white; background-color:blue;"';

$menus = [
    "Accueil" => "t6_include_home.php",
    "A propos" => "t6_include_about.php",
    "Contact" => "t6_include_contact.php",
    "google" => "https://google.fr"
];

foreach ($menus as $titre => $lien) {
    echo  ' <a '.$st .'href='.$lien.'>'. $titre.' </a> ';
}
