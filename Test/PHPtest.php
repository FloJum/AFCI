<?php
$equipes = array(1 => "France", "Belgique", "Italie");
for(reset($equipes); $key= key($equipes); next($equipes)){
    $classement = pos($equipes);
    echo"$classement est en $key. <br>"; 
}

// Exemple 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
?>