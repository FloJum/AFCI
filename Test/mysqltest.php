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

// INSERT

// $utilisateur ="Rex";
// $password ="chien";

// $utilisateur = mysqli_real_escape_string($conn,$utilisateur);

// $sql = "insert into user (utilisateur, password) values('$utilisateur','$password')";

// if (mysqli_query($conn,$sql))  {
//     echo "insertion réalisée <br>";
// } else {
//     echo "problème lors de l'insertion...<br>";
// }


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


// DELETE

$sql = "DELETE from user where id=14 ";
if (mysqli_query($conn,$sql)){}


//  UPDATE

$sql = "UPDATE user SET utilisateur = 'Rantanplan' WHERE id = 14";
if(mysqli_query($conn,$sql)){
$nbre = mysqli_affected_rows($conn);
echo $nbre."enregistrement mis à jour <br>";
} else {
    echo "erreur de mise  à jour <br>";
}

mysqli_free_result($res);
echo"<br> Mémoire libérée<br>";

if(mysqli_close($conn)) {
    echo " <br>BDD fermée <br>";
}


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$result = $mysqli->query("SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");

$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}
?>