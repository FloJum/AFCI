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


//  UPDATE

$sql = "UPDATE user SET utilisateur = 'Rantanplan' WHERE id = 14";
if(mysqli_query($conn,$sql)){
$nbre = mysqli_affected_rows($conn);
echo $nbre." enregistrement mis à jour. <br>";
} else {
    echo "erreur de mise à jour <br>";
}

//  SELECT


$sql = "SELECT * from user";
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
echo"<br> Mémoire libérée <br>";

if(mysqli_close($conn)) {
    echo " <br>BDD fermée <br>";
}
?>