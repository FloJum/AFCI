<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <title>Document</title>
</head>

<body>
    <main class="container-fluid">
        <div class=row>
            <div class="affiche col-6 offset-3 border border-dark p-3">
                <legend>Vous avez rempli le formulaire ainsi :</legend>
                <div><?php echo $_GET["nom"] ?></div>
                <div><?php echo $_GET["prénom"] ?></div>
                <div><?php echo $_GET["genre"] ?></div>
                <div><?php echo $_GET["statut_marital"] ?></div>
                <div><?php echo $_GET["password"] ?></div>
                <div><?php echo $_GET["passion"] ?></div>
                <div><?php echo $_GET["hobbys"] ?></div>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>