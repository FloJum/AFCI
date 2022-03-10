<?php
include "DBlogin.php";

if (isset($_POST['all_archived'])) {
    $sql = "UPDATE books SET isarchived=1";
    $result = mysqli_query($conn, $sql);
    $Archiv = "all_archived";
    mysqli_close($conn);
    header('Location: index.php');
}

if (isset($_POST['unarch'])) {
    $sql = "UPDATE books SET isarchived=0";
    $result = mysqli_query($conn, $sql);
    $Archiv = "unarch";
    mysqli_close($conn);
    header('Location: index.php');
}

if (isset($_POST['archive'])) {
    $id = $_POST['archive'];
    $sql = "UPDATE books SET isarchived=1 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: index.php');
}
if (isset($_POST['unarchivedbook'])) {
    $id = $_POST['unarchivedbook'];
    $sql = "UPDATE books SET isarchived=0 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    echo$id;
    header('Location: index.php');
}