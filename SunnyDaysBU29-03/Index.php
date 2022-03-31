<?php
include "Controller.php";
include "./myincludes/Header.php";

?>

<!DOCTYPE html>
<html lang="en">
    <title>Sunny Days</title>
    <body>
    <div class="accueil">
        <div class="row">
            <h1 class="col-12 text-center">Bienvenue <?php echo isset($_SESSION['user_type']) ? $_SESSION['user_name']." ".$_SESSION['user_forename'] : "Visiteur"; ?> !</h1>
            <div class="debug text-center">
                <h4>Debug mode PHP</h4>
                <form method="post" action="Controller.php" class="col-6 offset-3 text-center">
                    <button name="admin">admin </button>
                    <button name="membre">membre</button>
                    <button name="vide">vide</button>
                    <button name="null">null</button>
                    <?php if (isset($_SESSION['user_type'])) : {
                            var_dump($_SESSION['user_type']);
                            //." ".var_dump($_SESSION['user_email'])." ".var_dump($Ch_email)." ".var_dump($Ch_name)." ".var_dump($Ch_forename);
                        }
                    endif; ?>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/fonctions.js"></script>
        <?php require "./myincludes/Footer.php"; ?>
    </body>
</html>