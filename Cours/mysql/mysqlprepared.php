<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {
    die("connexion échouée");
} else {
    echo "connexion ok <br>";
}

// PREPARED
// s : string
// i : integer
// d : double
// b : blob

$sql = "INSERT into user (utilisateur, password) values (?,?)";
$resstmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($resstmt,"ss",$utilisateur,$password);

// Remplissage des variables
$utilisateur = "Patapouf";
$password = "Ronron";

mysqli_stmt_execute($resstmt);
echo "Nouvel enregistrement inséré... <br>";

for ($i = 0; $i<3;$i++){
    $utilisateur = "L'utilisateur(".$i.")<br>";
    $password = "Essai";
    mysqli_stmt_execute($resstmt);
    echo "Nouvel enregistrement correctement inséré... <br>";
}

//  SELECT

$sql = "SELECT * from user";
// $sql ="select * from user where utilisateur like 'F%'";
$res = mysqli_query($conn, $sql);
if($res) {
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        foreach($row as $key => $value) {
            echo $key."--->".$value."<br>";
        }
        echo"<br>";
    }
} else {
    echo "Un souci avec select ?";
}


mysqli_free_result($res);
echo"<br> Mémoire libérée<br>";

if(mysqli_close($conn)) {
    echo " <br>BDD fermée <br>";
}
