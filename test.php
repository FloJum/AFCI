<?php
$equipes = array(1 => "France", "Belgique", "Italie");
for(reset($equipes); $key= key($equipes); next($equipes)){
    $classement = pos($equipes);
    echo"$classement est en $key. <br>"; 
}


?>