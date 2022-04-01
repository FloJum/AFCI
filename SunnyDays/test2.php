<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";
date_default_timezone_set('Europe/Paris');


if (isset($_POST['btnregister'])) {
    $name = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_name']));
    $forename = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_forename']));
    $email = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
    $email2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email2']));
    $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
    $password2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password2']));

    if ($password != $password2) {
        $pass2err = "<p class='error'>Les mots de passe ne correspondent pas.</p>";
    } else {
        $passhash = password_hash($password, PASSWORD_DEFAULT);
        $password = "";
        $user_type = '["membre"]';
        $sql = "INSERT INTO users (name, forename, email, password,user_type) 
                            VALUES ('$name','$forename','$email','$passhash','$user_type')";
                            echo "<p>requête SQL : $sql</p>" ;
        $result = mysqli_query($conn, $sql);
        echo "<p>$result</p>" ; 
        mysqli_free_result($result);
        //LOGIN APRES INSCRIPT 
        $sql = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE'$passhash'";
        $req = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
        $_SESSION['user_name'] = $data['name'];
        $_SESSION['user_forename'] = $data['forename'];
        $_SESSION['user_email'] = $data['email'];
        if ($data['user_type'] == '["admin"]') {
            $_SESSION['user_type'] = $data['user_type'];
        } else {
            $_SESSION['user_type'] = $data['user_type'];
        }
        mysqli_free_result($req);
        mysqli_close($conn);
    }
}
            // }
