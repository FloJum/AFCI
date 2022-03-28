<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";

// Deconnexion
if(isset($_POST['logout'])) {
session_destroy();
header('Location: Index.php');
exit;
}

// CREATION COMPTE

if (isset($_POST['btnregister'])) {
    $name = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_name']));
    $forename = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_forename']));
    $email = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
    $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
    $password2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password2']));
    //VERIF SI MAIL DEJA PRESENT
    $sql = "SELECT count(*) FROM users WHERE email LIKE '$email'";
    $req = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($req);
    if ($data[0] == 1) {
        $mailerr = "Cette adresse email déjà utilisée par un compte.";
    } else {
        mysqli_free_result($req);
        // VERIF CONFORMITE MDP
        check_mdp_format($password);
        if (check_mdp_format($password) != true) {
            $mdperr = "Votre mot de passe doit contenir au moins 3 caractères dont 1 majuscule, 1 minuscule et 1 chiffre.";
        
        // if(!preg_match('/(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[!@#$%^&*()+=-?;,./{}|":<>[]\' ~_]).{8,}/', $password)) {
        //                 '^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$'
        //     $mdperr = "Votre mot de passe doit contenir entre 8 et 15 caractères dont 1 majuscule, 1 minuscule,1 chiffre et un des caractères spéciaux suivants : !@#$%^&*()+=-?;,./{}|\":<>[]\' ~_ .";
        } else {
            if ($password != $password2) {
                $pass2err = "Les mots de passe ne correspondent pas.";
            } else {
                $passhash = password_hash($password, PASSWORD_DEFAULT);
                $password = "";
                $user_type = '["membre"]';
                $sql = "INSERT INTO users (name, forename, email, password,user_type) 
                            VALUES ('$name','$forename','$email','$passhash','$user_type')";
                $result = mysqli_query($conn, $sql);
                $_SESSION['email'] = $email;

                //LOGIN APRES INSCRIPT 
                $sql = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE'$passhash'";
                $req = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
                
                if ($data['user_type'] == '["admin"]') {
                    $_SESSION['user_type'] = $data['user_type'];
                } else {
                    $_SESSION['user_type'] = $data['user_type'];
                }
                mysqli_free_result($req);
                mysqli_close($conn);
                header('Location:index.php?');
            }
        }
    }
}
?>