<?php

require "DBlogin.php";
// require "insert.php";

// if (mysqli_connect_error()) {
//     die("connexion échouée");
// } else {
//     echo "connexion ok";
// }
// require "insert.php";

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
$nbreLivres = mysqli_num_rows($result);
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
$b = "<br>";

// if (isset($_POST["book_title"])) {
//     $titre = $_POST["book_title"];
//     $auteur = $_POST["book_autor"];
//     $datepubli = $_POST["book_date_publi"];
//     $isarchived = "";
//     $sql = "INSERT INTO books (id,titre,auteur,datepub,isarchived) VALUES ('','$titre','$auteur','$datepubli','$isarchived')";
//     if (mysqli_query($conn, $sql)) {
//         echo "insertion réalisée <br>";
//     } else {
//         echo "problème lors de l'insertion...<br>";
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />

    <title>Affichage BDD-Books</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="post" action="insert.php">
                <div class="form-row mx-0 mt-5">
                    <label for="titre" class="col-2 offset-1">Titre :</label>
                    <input class="col-3" type="text" id="titre" name="book_title" />
                </div>
                <div class="form-row mx-0">
                    <label for="auteur" class="col-2 offset-1">Auteur :</label>
                    <input class="col-3" type="text" id="auteur" name="book_autor" />
                </div>
                <div class="form-row mx-0">
                    <label for="datepubli" class="col-2 offset-1">Datepubli :</label>
                    <input class="col-3" type="text" id="datepubli" name="book_date_publi" />
                </div>
                <div class="text-center">
                    <button class='btn btn-success' type="submit">Ajouter un livre</button><br>
                </div>
            </form>
            <h3>Nombre de livres : <?= $nbreLivres  ?></h3>

            <?php foreach ($all as $book) { ?>
                <div class="book col-12 border border-2">
                    <label for="title" class="col-6 offset-1">Titre : <?php echo $book['titre'] ?></label><br>
                    <label for="autor" class="col-6 offset-1">Auteur : <?= $book['auteur'] ?></label><br>
                    <label for="publidate" class="col-6 offset-1">Datepubli : <?= $book['datepub'] ?></label><br>
                    <label for="archived" class="col-6 offset-1">isarchived : <?= $book['isarchived'] ?></label><br>
                    <div class="text-center">
                        <button class='btn btn-secondary'>Supprimer le livre</button><br>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
    label {
        margin: 10px 0px;
    }

    h3 {
        padding: 30px 0px;
    }

    .book label {
        margin-top: 10px;
    }

    .book button {
        margin: 10px 0px;

    }
</style>