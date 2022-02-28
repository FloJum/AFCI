<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("Tirage.php"); ?>
</head>

<body>
<div>Gardien : <?php echo$Equipes[$randomKeys[0]] ?></div>
<div>Gardien : <?php echo$Equipes[$randomKeys[1]] ?></div>
<div>Gardien : <?php echo$Equipes[$randomKeys[2]] ?></div>
<div>Défenseur : <?php echo$Equipes[$randomKeys[3]] ?></div>
<div>Milieu : <?php echo$Equipes[$randomKeys[12]] ?></div>
<div>Attaquant : <?php echo$Equipes[$randomKeys[22]] ?></div>
<div><?php var_dump($Equipes)?></div>
<a href="Tirage.php?click=1"> <button>Tirage</button></a>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>