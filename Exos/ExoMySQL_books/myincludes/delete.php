<?php
include "DBlogin.php";

if(isset($_POST['delete'])) {
$id = $_POST['delete'];
$sql = "DELETE FROM books WHERE id = $id";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
header('Location: index.php');
}
?>