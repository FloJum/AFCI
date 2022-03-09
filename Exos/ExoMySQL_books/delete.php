<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "books";

$conn = mysqli_connect($host,$user,$pass,$db);
$id = $_POST['idsupp'];

$sql = "DELETE FROM books WHERE id = $id";

mysqli_close($conn);
header('Location: affichageDB.php');
?>