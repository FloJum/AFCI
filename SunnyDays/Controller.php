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
    $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
    $password2 = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password2']));
    // VERIF ADRESSE MAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Le format de l'adresse email est invalide.";
    } else {
        //VERIF SI MAIL DEJA PRESENT
        $sql = "SELECT count(*) FROM users WHERE email LIKE '$email'";
        $req = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($req);
        if ($data[0] == 1) {
            $emailerr = "Cette adresse email déjà utilisée par un compte.";
        } else {
            mysqli_free_result($req);
            // VERIF CONFORMITE MDP
            check_mdp_format($password);
            // if (check_mdp_format($password) != true) {
            //     $mdperr = "Votre mot de passe doit contenir au moins 3 caractères dont 1 majuscule, 1 minuscule et 1 chiffre.";

            if (!preg_match('^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$^', $password)) {
                $mdperr = "<ul>Votre mot de passe doit contenir entre 8 et 15 caractères dont :<li>1 majuscule, 1 minuscule et 1 chiffre</li><li>un des caractères spéciaux suivants : -+!*$@%_ </li></ul>";
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
                    if (mysqli_query($conn, $sql)) {
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
                        header('Location:index.php?');
                    } else {
                        $createerr = 'Nous n\'avons pu créer votre compte. Votre nom ou prénom contient probablement un caractère problématique.';
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
        // $autor = protect_montexte(mysqli_real_escape_string($conn, $_POST['art_autor']));
        $autor = $_SESSION['user_name'] . " " . $_SESSION['user_forename'];
        $article = protect_montexte(mysqli_real_escape_string($conn, $_POST['art_content']));
        $datepubli = date('y-m-d h:i:s');
        $sql = "SELECT * FROM blog WHERE title LIKE '$title'";
        $req = mysqli_query($conn, $sql);
        if (mysqli_num_rows($req) > 0) {
            $Err_art_add = "Titre déja";
            echo $Err_art_add;
            header('Location: Blog.php');
        } else {
            $sql = "INSERT INTO blog (title,autor,date_publi,article) VALUES ('$title', '$autor','$datepubli','$article')";
            $result = mysqli_query($conn, $sql);
            echo "Je suis peutetre ici";
            // if (mysqli_query($conn, $sql)) {
            mysqli_free_result($result);
            mysqli_close($conn);
            $Conf_art_add = "Votre article a bien été ajouté.";
            $_SESSION['conf_art_add'] = $Conf_art_add;
            echo "ICI";
            header('Location: Blog.php');
            // } else {
            //     $Err_art_add = "Erreur lors de l'ajout de l'article.";
            // }
        }
    } else {
        $Err_art_add = "Tous les champs doivent être remplis !";
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
    if (mysqli_query($conn, $sql)) {
        mysqli_free_result($result);
        mysqli_close($conn);
        $Conf_art_update = "Votre article a bien été modifié.";
        $_SESSION['conf_art_update'] = $Conf_art_update;
        header('Location: Blog.php');
    } else {
        $Err_art_update = "Erreur lors de la mise à jour de l'article.";
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

// ------------SEJOUR
// AJOUTER VOYAGE
if (isset($_POST['insert_travel'])) {
    // if (isset($_POST['travel_country'], $_POST['travel_destination']) && !empty($_POST['travel_country']) and !empty($_POST['art_content'])) {
    $country = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_country']));
    $destination = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_destination']));
    $chapoTravel = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_chapo']));
    $description = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_description']));
    $price = $_POST['travel_price'];
    $checkin = $_POST['travel_checkin'];
    $checkout = $_POST['travel_checkout'];
    $pictureTravel = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_picture']));
    $datepubliTr = date('y-m-d h:i:s');
    $sql = "INSERT INTO sejours (country,destination,chapo,description,price,checkin,checkout,picture,date_publi) VALUES ('$country','$destination','$chapoTravel','$description','$price','$checkin','$checkout','$pictureTravel','$datepubliTr') ";
    $insert = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
    mysqli_free_result($insert);
    mysqli_close($conn);
    $Conf_travel_add = "L'offre de voyage a bien été ajouté.";
    $_SESSION['conf_travel_add'] = $Conf_travel_add;
    header('Location: Sejours.php');
    } else {
        echo$Err_travel_add = "Erreur lors de l'ajout de l'offre de voyage.";
    }
//     } else {
//         $Err_art_add = "Tous les champs doivent être remplis !";
//     }
}

//UPDATE VOYAGE
if (isset($_POST['update_travel_verif'])) {
    $id = $_POST['update_travel_verif'];
    // $country = protect_montexte(mysqli_real_escape_string($conn, $_POST['travel_country']));
    // $destination = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_destination']));
    // $chapoTravel = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_chapo']));
    // $description = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_description']));
    $country = $_POST['travel_country'];
    $destination = $_POST['travel_destination'];
    $chapoTravel = $_POST['travel_chapo'];
    $description = $_POST['travel_description'];
    $price = $_POST['travel_price'];
    $checkin = $_POST['travel_checkin'];
    $checkout = $_POST['travel_checkout'];
    // $pictureTravel = protect_montexte(mysqli_real_escape_string($conn,$_POST['travel_picture']));
    $pictureTravel = $_POST['travel_picture'];
    $dateupdateTr = date('y-m-d h:i:s');;
    echo $id."<br>".$country."<br>".$destination."<br>".$chapoTravel."<br>".$description."<br>".$price."<br>".$checkin."<br>".$checkout."<br>".$pictureTravel."<br>".$dateupdateTr;
    $sql = "UPDATE sejours SET country='$country', destination ='$destination', chapo='$chapoTravel', description='$description', 
    price = '$price', checkin = '$checkin', checkout='$checkout', picture='$pictureTravel',date_update='$dateupdateTr' WHERE id LIKE '$id'";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    if (mysqli_query($conn, $sql)) {
        mysqli_free_result($result);
        mysqli_close($conn);
        echo $Conf_art_update = "L'offre a bien été modifié.";
        $_SESSION['conf_art_update'] = $Conf_art_update;
        header('Location: Sejours.php');
    } else {
        echo $Err_art_update = "Erreur lors de la mise à jour de l'offre.";
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
