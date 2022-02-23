<?php $b = "<br>";
$br = "<br>" . "<br>";

function Bonjour()
{
    echo "Bonjour";
}
echo Bonjour();
echo $br;

function afficherNombres()
{
    for ($i = 1; $i  < 101; $i++) {
        if ($i % 10 == 0) {
            echo $i;
            global $b;
            echo $b;
        } else {
            echo $i . " ";
        }
    }
}
// CORRECTION  echo $i.(($i % 10 == 0) ? $b) : ".");
echo afficherNombres();
echo $br;

function somme2Entiers($param1, $param2)
{
    return $param1 + $param2;
}
echo "La somme est : " . somme2Entiers(5, 10);
echo $br;

function longueurChaine($param)
{
    echo "Le nombre de caractères de la chaine \"$param\" est : ";
    return strlen($param);
}
echo longueurChaine("Bienvenue");
echo $br;

function remplaceCaractere($param)
{
    echo "Les 'e', 'E' de \"$param\" sont remplacés : ";
    $charReplace = array("e", "E");
    return str_replace($charReplace, "_", $param);
    // CORRECTION  return str_ireplace ("e", "_", $param);
}
echo remplaceCaractere("Emmener et créer ");
echo $br;

function listeVal($param)
{
    for (reset($param); $key = key($param); next($param)) {
        $val = pos($param);
        echo strtoupper($key) . " => " . strtolower($val) . "<br>";
    }
}
$Tab["Fra"] = "France";
$Tab["Can"] = "Canada";
$Tab["Ita"] = "Italie";
echo listeVal($Tab);
echo $br;

echo "L'adresse IP de l'utilisateur est : " . $_SERVER['REMOTE_ADDR'];
echo $br;

/*
function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L adresse IP de l utilisateur est : '.getIp();

  getIp(); */

for ($i = 1; $i < 8; $i++) {
    for ($j = 1; $j < 8; $j++) {
        if ($j % 7 == 0) {
            $prod = $i * $j;
            if ($prod < 10) {
                echo "0" . $prod . " ";
                echo "<br>";
            } else {
                echo $prod . " ";
                echo "<br>";
            }
        } else {
            $prod = $i * $j;
            if ($prod < 10) {
                echo "0" . $prod . " ";
            } else {
                echo $prod . " ";
            }
        }
    }
}
echo $br;

function Triangle($param)
{
    for ($i = -1; $i < $param; $i++) {
        for ($j = -1; $j < $i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }
}
$n = 2;
echo Triangle($n);
echo $br;
$N = 5;
echo Triangle($N);


function USA($param)
{
    echo "<pre>";
    for ($i = 1; $i <= $param; $i++) {
        for ($j = 1; $j <= $param; $j++) {
            if ($i == 1 || $i == $param || $j == 1  || $j == $param) {
                echo "*";
            } else {
                echo (" ");
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}

$U = 7;
echo USA($U);
echo $br;

$tdblack = "<td style='background-color:black'></td>";
$tdwhite = "<td style='background-color:white'></td>";
$NN = 2;
echo "<table frame='border' border='1' cellpadding='30%' cellspacing='0'><tr>";
for ($i = 0; $i < $NN; $i++) {
    for ($j = 0; $j < $NN; $j++) {
        if ($i % 2 == 1) {
            if ($j % 2 == 1) {
                echo $tdwhite;
            }
            if ($j % 2 == 0) {
                echo $tdblack;
            }
        }
        if ($i % 2 == 0) {
            if ($j % 2 == 1) {
                echo $tdwhite;
            }
            if ($j % 2 == 0) {
                echo $tdblack;
            }
        }
    }
}
echo "</tr></table>";
