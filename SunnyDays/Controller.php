<?php
session_start();
include "./myincludes/DBlogin.php";
include "./myincludes/fonctions_utiles.php";
date_default_timezone_set('Europe/Paris');


// ADMIN OU MEMBRE DEBUG
if (isset($_POST['admin'])) {
    $_SESSION['user_type'] = '["admin"]';
    header('Location: Index.php');
}
if (isset($_POST['membre'])) {
    $_SESSION['user_type'] = '["membre"]';
    header('Location: Index.php');
}
if (isset($_POST['vide'])) {
    $_SESSION['user_type'] = '';
    header('Location: Index.php');
}
if (isset($_POST['null'])) {
    $_SESSION['user_type'] = null;
    header('Location: Index.php');
}

// Deconnexion
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: Index.php');
}

// --------------CREATION COMPTE
if (isset($_POST['btnregister'])) {
    $name = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_name']));
    $forename = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_forename']));
    $email = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
    $email2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email2']));
    $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
    $password2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password2']));
    // VERIF ADRESSE MAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = $emailErr = "<p class='error'>Le format de l'adresse email est invalide.</p>";
    } else {
        //VERIF SI MAIL DEJA PRESENT
        $sql = "SELECT count(*) FROM users WHERE email LIKE '$email'";
        $req = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($req);
        if ($data[0] == 1) {
            $_SESSION['emailErr'] =  $emailerr = "<p class='error'>Cette adresse email déjà utilisée par un compte.</p>";
        } else {
            mysqli_free_result($req);
            if ($email != $email2) {
                $_SESSION['emailErr'] = $emailerr = "<p class='error'>Les adresses mail ne correspondent pas.</p>";
            } else {
                // VERIF CONFORMITE MDP
                if (!preg_match('^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$^', $password)) {
                    $_SESSION['mdperr'] =  $mdperr = "<ul class='error'>Votre mot de passe doit contenir entre 8 et 15 caractères dont :<li>1 majuscule, 1 minuscule et 1 chiffre</li><li>un des caractères spéciaux suivants : -+!*$@%_ </li></ul>";
                } else {
                    if ($password != $password2) {
                        $_SESSION['mdperr'] =  $mdperr = "<p class='error'>Les mots de passe ne correspondent pas.</p>";
                    } else {
                        $passhash = password_hash($password, PASSWORD_DEFAULT);
                        $password = "";
                        $user_type = '["membre"]';
                        $sql = "INSERT INTO users (name, forename, email, password,user_type) 
                            VALUES ('$name','$forename','$email','$passhash','$user_type')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            //LOGIN APRES INSCRIPT 
                            $sql = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE'$passhash'";
                            $req = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($req, MYSQLI_ASSOC);
                            $_SESSION['user_name'] = $data['name'];
                            $_SESSION['user_forename'] = $data['forename'];
                            $_SESSION['user_email'] = $data['email'];
                            $_SESSION['user_id'] = $data['id'];
                            if ($data['user_type'] == '["admin"]') {
                                $_SESSION['user_type'] = $data['user_type'];
                            } else {
                                $_SESSION['user_type'] = $data['user_type'];
                            }
                            mysqli_free_result($req);
                            mysqli_close($conn);
                            header('Location:index.php?');
                        } else {
                            $_SESSION['createerr'] = $createerr = '<p class="error">Nous n\'avons pu créer votre compte. Votre nom ou prénom contient probablement un caractère problématique.</p>';
                        }
                    }
                }
            }
        }
    }
}
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
};
// promotion membre
if (isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $usertype = '["admin"]';
    $sql = "UPDATE users SET user_type= '$usertype' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    $Member_name =  $Member_forename =  $Member_id = "";
    mysqli_free_result($result);
    header('Location: admin.php');
}
// supression membre
if (isset($_POST['delete_user_verif'])) {
    $id = $_POST['delete_user'];
    $sql = "DELETE FROM users  WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    header('Location: admin.php');
}

// -----------CONTACT
$Ch_name = $Ch_forename = $Ch_email = " ";
if (isset($_SESSION['user_type'])) {
    $Ch_name = $_SESSION['user_name'];
    $Ch_forename = $_SESSION['user_forename'];
    $Ch_email = $_SESSION['user_email'];
};


// ------------BLOG
// AJOUTER ARTICLE
if (isset($_POST['insert_article'])) {
    if (isset($_POST['art_title'], $_POST['art_content']) && !empty($_POST['art_title']) and !empty($_POST['art_content'])) {
        $id = $_POST['insert_article'];
        $title = protect_montexte(mysqli_real_escape_string($conn, $_POST['art_title']));
        $autor = $_SESSION['user_name'] . " " . $_SESSION['user_forename'];
        $article = protect_montexte(mysqli_real_escape_string($conn, $_POST['art_content']));
        $datepubli = date('y-m-d h:i:s');
        $sql = "SELECT * FROM blog WHERE title LIKE '$title'";
        $req = mysqli_query($conn, $sql);
        if (mysqli_num_rows($req) > 0) {
            $_SESSION['err_art_add'] = $Err_art_add = "Titre déja";
            header('Location: Blog.php');
        } else {
            $sql = "INSERT INTO blog (title,autor,date_publi,article) VALUES ('$title', '$autor','$datepubli','$article')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                mysqli_close($conn);
                $_SESSION['conf_art_add'] = $Conf_art_add = "<p class='error'>Votre article a bien été ajouté.</p>";
                header('Location: Blog.php');
            } else {
                $_SESSION['err_art_add'] = $Err_art_add = "<p class='error'>Erreur lors de l'ajout de l'article.</p>";
            }
        }
    } else {
        $_SESSION['err_art_add'] =$Err_art_add = "<p class='error'>Tous les champs doivent être remplis !</p>";
    }
}

// MODIFIER ARTICLE
if (isset($_POST['update_article'])) {
    $id = $_POST['update_article'];
    $title = protect_montexte($_POST["art_title"]);
    $article = protect_montexte($_POST["art_content"]);
    $dateupdate = date('y-m-d h:i:s');
    $sql = "UPDATE blog SET title='$title',article='$article',date_update='$dateupdate' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        mysqli_close($conn);
        $_SESSION['conf_art_update'] = $Conf_art_update = "<p class='error'>Votre article a bien été modifié.</p>";
        header('Location: Blog.php');
    } else {
        $_SESSION['err_art_update'] =$Err_art_update = "<p class='error'>Erreur lors de la mise à jour de l'article.</p>";
    }
}

// SUPPRIMER ARTICLE
if (isset($_POST['delete_article_verif'])) {
    $id = $_POST['delete_article_verif'];
    $sql = "DELETE FROM blog WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: Blog.php');
}
// COMM
if (isset($_POST['add_comm'])) {
    if(isset($_POST['commentary']) && !empty($_POST['commentary'])) {
        $comm = protect_montexte(mysqli_real_escape_string($conn, $_POST['commentary']));
        $articleid = $_POST['add_comm'];
        $autorid = $_SESSION['user_id'];
        $datepubli = date('y-m-d h:i:s');
        $sql = "INSERT INTO commentaries (commentary,blog_id,autor_id, datepubli) VALUES ('$comm', '$articleid','$autorid','$datepubli')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['conf_comm'] = $conf_comm = "<p class='error'>Votre commentaire a été posté</p>";
        } else {
            $_SESSION['err_comm'] = $Err_comm = "<p class='error'>Erreur lors de l'ajout du commentaire.</p>";
        }
        
    } else {
       $_SESSION['err_comm'] = $Err_comm = "<p class='error'>Un commentaire vide n'est pas un commentaire</p>";
        }
}


// ------------SEJOUR
// AJOUTER VOYAGE
if (isset($_POST['insert_travel'])) {
    if (isset($_POST['travel_country'], $_POST['travel_destination'],$_POST['travel_chapo'],$_POST['travel_description'],
    $_POST['travel_price'],$_POST['travel_checkin'],$_POST['travel_checkout'],$_POST['travel_picture']) 
    && !empty($_POST['travel_country']) and !empty($_POST['travel_destination']) and !empty($_POST['travel_chapo']) and !empty($_POST['travel_description'])
     and !empty($_POST['travel_price']) and !empty($_POST['travel_checkin'])and !empty($_POST['travel_checkout'])and !empty($_POST['travel_picture'])){
        $country = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_country']));
        $destination = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_destination']));
        $chapoTravel = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_chapo']));
        $description = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_description']));
        $price = $_POST['travel_price'];
        $checkin = $_POST['travel_checkin'];
        $checkout = $_POST['travel_checkout'];
        $pictureTravel = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_picture']));
        // $pictureTravel = md5($pictureTravel);
        $datepubliTr = date('y-m-d h:i:s');
        $sql = "INSERT INTO sejours (country,destination,chapo,description,price,checkin,checkout,picture,date_publi) VALUES ('$country','$destination','$chapoTravel','$description','$price','$checkin','$checkout','$pictureTravel','$datepubliTr') ";
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
            mysqli_close($conn);
            $_SESSION['conf_travel_add'] = $Conf_travel_add = "<p class='error'>L'offre de voyage a bien été ajouté.</p>";
            header('Location: Sejours.php');
        } else {
            $_SESSION['err_travel_add'] = $Err_travel_add = "<p class='error'>Erreur lors de l'ajout de l'offre de voyage.</p>";
        }
    } else {
        $_SESSION['err_travel_add'] = $Err_art_add = "<p class='error'>Tous les champs doivent être remplis !</p>";
       
    }
}

//UPDATE VOYAGE
if (isset($_POST['update_travel_verif'])) {
    $id = $_POST['update_travel_verif'];
    $country = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_country']));
    $destination = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_destination']));
    $chapoTravel = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_chapo']));
    $description = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_description']));
    $price = $_POST['travel_price'];
    $checkin = $_POST['travel_checkin'];
    $checkout = $_POST['travel_checkout'];
    $pictureTravel = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_picture']));
    $dateupdateTr = date('y-m-d h:i:s');
    $sql = "UPDATE sejours SET country='$country', destination ='$destination', chapo='$chapoTravel', description='$description', 
    price = '$price', checkin = '$checkin', checkout='$checkout', picture='$pictureTravel',date_update='$dateupdateTr' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        mysqli_close($conn);
        $_SESSION['conf_travel_update'] =  $Conf_travel_update = "<p class='error'>L'offre a bien été modifié.</p>";
        header('Location: Sejours.php');
    } else {
        $_SESSION['err_travel_update'] = $Err_travel_update = "<p class='error'>Erreur lors de la mise à jour de l'offre.</p>";
    }
}

// SUPPRIMER ARTICLE
if (isset($_POST['delete_travel_verif'])) {
    $id = $_POST['delete_travel_verif'];
    $sql = "DELETE FROM sejours WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_free_result($result);
    mysqli_close($conn);
    header('Location: Sejours.php');
}
