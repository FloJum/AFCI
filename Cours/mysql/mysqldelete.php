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


// DELETE

$sql = "DELETE from user where id=14 ";
if (mysqli_query($conn,$sql)){}


if(mysqli_close($conn)) {
    echo " <br>BDD fermée <br>";
}
?>