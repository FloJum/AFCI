<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";

// -----------ADMIN
// choix membre
if (isset($_POST['select_member'])) {
    $id = $_POST['user_select'];
    $sql = "SELECT * FROM users WHERE id LIKE '$id'";
    $uplist = mysqli_query($conn, $sql);
    foreach ($uplist as $val) {
        $Member_name = $val['name'];
        $Member_forename = $val['forename'];
        $Member_id = $val['id']; 
    }
    mysqli_free_result($uplist);
    mysqli_close($conn);

};
// promotion membre
if (isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $usertype = '["admin"]';
    $sql = "UPDATE users SET user_type= '$usertype' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    $Member_name =  $Member_forename =  $Member_id = "";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: admin.php');
}
// supression membre





