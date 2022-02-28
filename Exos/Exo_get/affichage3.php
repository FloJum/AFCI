<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <?php
    session_start();
    $Name = $_SESSION['user_name'];
    $Forename = $_SESSION['user_forename'];
    $Gender = $_SESSION['user_gender'];
    $FamilyStatus = $_SESSION['user_family_status'];
    $Password = $_SESSION['user_password'];
    $Passion = $_SESSION['user_passion'];
    $Hobbys = $_SESSION['user_hobbys'];
    $Pseudo = $_SESSION['user_pseudo'];
    $Email = $_SESSION['user_email'];


    ?>
    <title>Document</title>
</head>

<body>
    <main class="container-fluid flex">
        <div class="row">
            <div class="affiche col-6 offset-3 border border-dark p-3">
                <div class="row ">
                    <h3 class="col-12 text-center">Bonjour <?php echo $Forename ?> ! Voici les informations fournies : </h3>
                    <div class="col-6 text-center">
                        <h5 class="text-decoration-underline">Nom et prénom :</h5>
                        <p>Ton nom est bien <strong><?php echo $Name ?> <?php echo $Forename ?></strong> n'est-ce pas ?</p>
                    </div>
                    <div class="col-6 text-center">
                        <h5 class="text-decoration-underline">Genre et Statut marital :</h5>
                        <p>Apparemment tu es <strong><?php echo $Gender ?></strong> et tu es <strong><?php echo $FamilyStatus ?></strong>.</p>
                    </div>
                    <div class="col-12  text-center">
                        <h5 class="col-12 text-decoration-underline">Mot de passe :</h5>
                        <div class="col-12">Ton mot de passe n'est pas secret car il s'affiche en clair ici : <strong><?php echo $Password ?></strong> </div>
                    </div>
                    <div class="col-6 text-center">
                        <h5 class="col-12 text-decoration-underline">Passion :</h5>
                        <p class="col-12">Je vois que tu es passionné par <strong><?php echo $Passion ?></strong>.</p>
                    </div>
                    <div class="col-6 text-center">
                        <h5 class="col-12 text-decoration-underline">Hobbys :</h5>
                        <p class="col-12">Tes hobbys sont : <strong><?php echo $Hobbys ?></strong>.</p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-decoration-underline">Pseudo et adresse mail :</h5>
                        <p>Tu as choisi le pseudo <strong><?php echo $Pseudo ?></strong> et ton adresse mail est <strong><?php echo $Email ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>

<style>
    body {
      background-color: #112f41;
    }
    .affiche {
        margin-top: 40px;
        background-color: mistyrose;
    }

    h5 {
        margin-top: 20px;
        border: 1px  solid black;
        background-color: white;
        padding: 10px 0px;
    }
</style>