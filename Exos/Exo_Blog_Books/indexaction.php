<?php
session_start();
include "../ExoMySQL_books/myincludes/DBlogin.php";
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);
$nbreLivres = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
$sql = "SELECT * FROM book WHERE isarchived=1";
$result = mysqli_query($conn, $sql);
$nbreLivresArch = mysqli_num_rows($result);
mysqli_free_result($result);

// ADMIN OU MEMBRE
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

    mysqli_close($conn);
    header('Location: livres.php');
}

// SUPPRIMER LIVRE
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM book WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    header('Location: livres.php');
}
// FORMULAIRE LIVRE UPDATE 
$Ch_titre = $Ch_auteur = $Ch_datepubli = $Ch_prix = "";
if (isset($_POST['update'])) {
    $sql = "SELECT * FROM book WHERE id=$_POST[update]";
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
    $sql = "UPDATE book SET titre='$titre',auteur='$auteur',datepub='$datepubli',prix='$prix' WHERE id=$id";
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
    mysqli_close($conn);
    header('Location: livres.php');
}

if (isset($_POST['unarch'])) {
    $sql = "UPDATE book SET isarchived=0";
    $result = mysqli_query($conn, $sql);
    $Archiv = "unarch";
    mysqli_close($conn);
    header('Location: livres.php');
}

if (isset($_POST['archive'])) {
    $id = $_POST['archive'];
    $sql = "UPDATE book SET isarchived=1 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: livres.php');
}
if (isset($_POST['unarchivedbook'])) {
    $id = $_POST['choixlivre'];
    $sql = "UPDATE book SET isarchived=0 WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: livres.php');
}


// COMMANDER 
if (isset($_POST['commander'])) {
    $sql = "SELECT * FROM book WHERE id=$_POST[commander]";
    $upbook = mysqli_query($conn, $sql);
    foreach ($upbook as $val) {
        $Ch_titre = $val['titre'];
        $Ch_auteur = $val['auteur'];
        $Ch_datepubli = $val['datepub'];
        $Ch_id = $val['id'];
        $Ch_prix = $val['prix'];
    }
    // header('Location: commande.php');
}

// CREATION COMPTE
if (isset($_POST['btnregister'])) {
    $pseudo = $_POST['user_pseudo'];
    $mail = $_POST['user_email'];
    $password = $_POST['user_password'];
    $role = '["membre"]';
    $sql = "INSERT INTO users (mail,password,pseudo,role) 
                        VALUES ('$mail','$password','$pseudo','$role')";
    $log = mysqli_connect("localhost", "root", "", "books");
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    $_SESSION['mail'] = $_POST['user_email'];
    $sql = "SELECT * FROM users WHERE mail='$mail' AND password='$password'";
    $req = mysqli_query($log, $sql);
    $data = mysqli_fetch_array($req);
    $_SESSION['pseudo'] = $data['pseudo'];
    if ($data['role'] == 'admin') {
        $_SESSION['role'] = $data['role'];
        echo $_SESSION['role'];
        mysqli_free_result($req);
        mysqli_close($Logdb);
        header('Location:index.php?');
        exit();
    } else {
        $_SESSION['role'] = $data['role'];
        echo $_SESSION['role'];
        mysqli_free_result($req);
        mysqli_close($log);
        header('Location:index.php?');
        exit();
    }
}

// FORMULAIRE UTILISATEUR UPDATE
$Ch_pseudo = $Ch_mail = $Ch_pass = $Ch_role = " ";
if (isset($_POST['select_user'])) {
    $sql = "SELECT * FROM users WHERE id=$_POST[select_user]";
    $uplist = mysqli_query($conn, $sql);
    foreach ($uplist as $val) {
        $Ch_pseudo = $val['pseudo'];
        $Ch_mail = $val['mail'];
        $Ch_pass = $val['password'];
        $Ch_id = $val['id'];
        $Ch_role = $val['role'];
    }
    mysqli_free_result($uplist);
    mysqli_close($conn);
};
// MODIFIER UTILISATEUR
if (isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $pseudo = $_POST['user_pseudo'];
    $mail = $_POST['user_email'];
    $pass = $_POST['user_password'];
    $role = $_POST["user_role"];
    $sql = "UPDATE users SET mail='$mail',password='$pass',pseudo='$pseudo',role='$role' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $Ch_pseudo = $Ch_mail = $Ch_pass = $Ch_role = "";
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: admin_book.php');
}
