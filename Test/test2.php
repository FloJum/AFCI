<?php
if (isset($_POST['btnconnex']) && $_POST['btnconnex'] == 'Connexion') {
    if ((isset($_POST['user_email']) && !empty($_POST['user_email'])) && (isset($_POST['user_password']) && !empty($_POST['user_password']))) {
        $conn = mysqli_connect("localhost", "root", "", "books");
        if (mysqli_connect_error($conn)) {
            die("Connexion à la BDD échouée.");
        }
        $mail = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_email']));
        $password = protect_montexte(mysqli_real_escape_string($conn, $_POST['user_password']));
        $passhash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT count(*) FROM users WHERE mail LIKE '$mail'";
        $req = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($req, MYSQLI_BOTH);
        // $sql = "SELECT * FROM users WHERE mail LIKE '$mail'";
        // $req = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($req);
        // var_dump($row);
        // echo 'Le password crypté = '.password_hash($password, PASSWORD_DEFAULT).'<br />';
        // echo 'Le password dans la base de données est : '.$row['password'].'<br />';
        // echo password_verify($password, $row['password']) ? 'Ca marche' : 'Ca marche pas';

        if ($data[0] == 1) {
            // $sql = "SELECT password FROM users WHERE mail LIKE '$mail'";
            // $req = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_array($req);
            // $validpassword = password_verify($password, $row['password'])
            // if ($validpassword) {
                session_start();
                $_SESSION['mail'] = $_POST['user_email'];
                // $sql = "SELECT * FROM users WHERE mail LIKE '$mail' AND password LIKE'$passhash'";
                $req = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($req);
                $_SESSION['pseudo'] = $data['pseudo'];
                var_dump($data['role']);
                if ($data['role'] == '["admin"]') {
                    $_SESSION['role'] = $data['role'];
                    mysqli_free_result($req);
                    mysqli_close($conn);
                    header('Location:index.php?');
                    exit();
                } else {
                    $_SESSION['role'] = $data['role'];
                    mysqli_free_result($req);
                    mysqli_close($conn);
                    header('Location:index.php?');
                    exit();
                }
            // }
        } elseif ($data[0] == 0) {
            $err = "<p style='color:red;margin-top:20px'>L'adresse mail ou le mot de passe est erroné.</p>";
        } else {
            $err = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
        }
    } else {
        $err = 'Au moins un des champs est vide.';
    }
}