<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);
$nbreLivres = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
$sql = "SELECT * FROM book WHERE isarchived LIKE 1";
$result = mysqli_query($conn, $sql);
$nbreLivresArch = mysqli_num_rows($result);
mysqli_free_result($result);

// ADMIN OU MEMBRE DEBUG
if (isset($_POST['admin'])) {
    $_SESSION['role'] = '["admin"]';
    header('Location: index.php');
}
if (isset($_POST['membre'])) {
    $_SESSION['role'] = '["membre"]';
    header('Location: index.php');
}
// AJOUTER LIVRE
if (isset($_POST['insert'])) {
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $isarchived = "0";
    $prix = $_POST["book_price"];
    $sql = "INSERT INTO book (titre,auteur,datepub,isarchived,prix) 
                        VALUES ('$titre','$auteur','$datepubli','$isarchived','$prix')";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: livres.php');
}

// SUPPRIMER LIVRE
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM book WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: livres.php');
}
// FORMULAIRE LIVRE UPDATE 
$Ch_titre = $Ch_auteur = $Ch_datepubli = $Ch_prix = "";
if (isset($_POST['update'])) {
    $sql = "SELECT * FROM book WHERE id LIKE '$_POST[update]'";
    $upbook = mysqli_query($conn, $sql);
    foreach ($upbook as $val) {
        $Ch_titre = $val['titre'];
        $Ch_auteur = $val['auteur'];
        $Ch_datepubli = $val['datepub'];
        $Ch_id = $val['id'];
        $Ch_prix = $val['prix'];
    }
    mysqli_free_result($upbook);
    mysqli_close($conn);
};

//MODIFIER LIVRE
if (isset($_POST['upbook'])) {
    $id = $_POST['upbook'];
    $titre = $_POST["book_title"];
    $auteur = $_POST["book_autor"];
    $datepubli = $_POST["book_date_publi"];
    $prix = $_POST['book_price'];
    $sql = "UPDATE book SET titre='$titre',auteur='$auteur',datepub='$datepubli',prix='$prix' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    $Btn = "Ajouter un livre";
    $Ch_titre = $Ch_auteur = $Ch_datepubli = $Ch_prix = "";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: livres.php');
}

// ARCHIVER/DESARCHIVER 
if (isset($_POST['all_archived'])) {
    $sql = "UPDATE book SET isarchived=1";
    $result = mysqli_query($conn, $sql);
    $Archiv = "all_archived";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: livres.php');
}

if (isset($_POST['archive'])) {
    $id = $_POST['archive'];
    $sql = "UPDATE book SET isarchived=1 WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: livres.php');
}
if (isset($_POST['unarchivedbook'])) {
    $id = $_POST['choixlivre'];
    $sql = "UPDATE book SET isarchived=0 WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    clear_db($result, $conn);
    header('Location: livres.php');
}


// COMMANDER 
if (isset($_POST['commander'])) {
    $sql = "SELECT * FROM book WHERE id LIKE '$_POST[commander]'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $val) {
        $Ch_titre = $val['titre'];
        $Ch_auteur = $val['auteur'];
        $Ch_datepubli = $val['datepub'];
        $Ch_id = $val['id'];
        $Ch_prix = $val['prix'];
    }
    mysqli_free_result($result);
}

// CREATION COMPTE

if (isset($_POST['btnregister'])) {
    $pseudo = $_POST['user_pseudo'];
    $mail = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
    $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
    $password2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password2']));
    //VERIF SI MAIL DEJA PRESENT
    $sql = "SELECT count(*) FROM users WHERE mail LIKE '$mail'";
    $req = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($req);
    if ($data[0] == 1) {
        $mailerr = "Adresse email déjà utilisée par un autre membre.";
    } else {
        mysqli_free_result($req);
        // VERIF CONFORMITE MDP
        check_mdp_format($password);
        if (check_mdp_format($password) != true) {
            $mdperr = "Votre mot de passe doit contenir au moins 3 caractères dont 1 majuscule, 1 minuscule et 1 chiffre.";
        } else {
            if ($password != $password2) {
                $pass2err = "Les mots de passe ne correspondent pas.";
            } else {
                $passhash = password_hash($password, PASSWORD_DEFAULT);
                $password = "";
                $role = '["membre"]';
                $sql = "INSERT INTO users (mail,password,pseudo,role) 
                            VALUES ('$mail','$passhash','$pseudo','$role')";
                $result = mysqli_query($conn, $sql);
                $_SESSION['mail'] = $mail;

                //LOGIN APRES INSCRIPT
                $sql = "SELECT * FROM users WHERE mail LIKE '$mail' AND password LIKE'$passhash'";
                $req = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
                $_SESSION['pseudo'] = $data['pseudo'];
                if ($data['role'] == '["admin"]') {
                    $_SESSION['role'] = $data['role'];
                } else {
                    $_SESSION['role'] = $data['role'];
                }
                mysqli_free_result($req);
                mysqli_close($conn);
                header('Location:index.php?');
            }
        }
    }
}

// FORMULAIRE UTILISATEUR UPDATE
$Ch_pseudo = $Ch_mail = $Ch_pass = $Ch_role = " ";
if (isset($_POST['select_user'])) {
    $id = mysqli_real_escape_string($conn, $_POST['user_select']);
    $sql = "SELECT * FROM users WHERE id LIKE '$id'";
    $uplist = mysqli_query($conn, $sql);
    foreach ($uplist as $val) {
        $Ch_pseudo = $val['pseudo'];
        $Ch_mail = $val['mail'];
        $Ch_pass = $val['password'];
        $Ch_id = $val['id'];
        $Ch_role = protect_montexte($val['role']);
    }
    mysqli_free_result($uplist);
    mysqli_close($conn);
};
// MODIFIER UTILISATEUR
// if (isset($_POST['update_user'])) {
//     $id = $_POST['update_user'];
//     $pseudo = $_POST['user_pseudo'];
//     $mail = $_POST['user_email'];
//     $role = $_POST["user_role"];
//     $sql = "UPDATE users SET mail='$mail',password='$pass',pseudo='$pseudo',role='$role' WHERE id LIKE '$id'";
//     $result = mysqli_query($conn, $sql);
//     $Ch_pseudo = $Ch_mail = $Ch_pass = $Ch_role = "";
//     mysqli_free_result($result);
//     mysqli_close($conn);
//     header('Location: admin.php');
// }
if (isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $role = '["admin"]';
    $sql = "UPDATE users SET role= '$role' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    $Ch_pseudo = $Ch_mail = $Ch_pass = $Ch_role = "";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: admin.php');
}