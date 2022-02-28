<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage PES</title>
</head>

<body>
    <div class="row">
        <?php $b = "<br>";
        $Str = "";
        $Equipes = array(
            "Allemagne", "Angleterre",
            "Argentine", "Belgique",
            "Brésil",  "Bulgarie",
            "Cameroun", "Corée",
            "Croatie", "Danemark",
            "Écosse", "Espagne",
            "USA", "France",
            "Italie", "Japon",
            "Mexique", "Nigéria",
            "Pays-Bas", "Portugal",
            "République Tchèque", "Roumanie",
            "Suède"
        );
        echo "Tirage au sort des nationalités par poste :" . $b . $b;
        shuffle($Equipes);
        $randomKeys = array_rand($Equipes, 23);
        foreach ($randomKeys as $Tirage) {
            if ($Tirage < 3) {
                $Rnumb = rand(1, 100);
                if ($Rnumb % 2 == 0) {
                    echo "<h4 style='color:red'>Gardien = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                } else {
                    echo "<h4 style='color:blue'>Gardien = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                }
            } else if ($Tirage >= 3 && $Tirage < 11) {
                $Rnumb = rand(1, 100);
                if ($Rnumb % 2 == 0) {
                    echo "<h4 style='color:blue'>Défenseur = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                } else {
                    echo "<h4 style='color:red'>Défenseur = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                }
            } else if ($Tirage >= 11 && $Tirage < 18) {
                $Rnumb = rand(1, 100);
                if ($Rnumb % 2 == 0) { 
                    echo "<h4 style='color:blue'>Milieu = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                } else {  
                    echo "<h4 style='color:red'>Milieu = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                }
            } else {
                $Rnumb = rand(1, 100);
                if ($Rnumb % 2 == 0) { 
                    echo "<h4 style='color:blue'>Attaquant = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                } else {
                    echo "<h4 style='color:red'>Attaquant = " . $Equipes[$randomKeys[$Tirage]]."</h4>";
                }
            }
        };
        $b;$b;
        $Rnumb2 = rand(1, 100);
        if ($Rnumb % 2 == 0) { 
            echo "<p style='color:blue'>Romi - <span style='color:red'>Flo</span></p>";
        } else {  
            echo "<p style='color:red'>Romi - <span style='color:blue'>Flo</span></p>";
        }
        // var_dump($Equipes); $b;$b;$b;
        // var_dump($randomKeys);$b;$b;$b;
        // var_dump($Tirage);$b;$b;$b;
        //    var_dump($Str);
        // if (isset($_GET["click"])){
        //     shuffle($Equipes);
        //     $randomKeys = array_rand($Equipes, 23);
        //     exit();
        // }
        ?>
        <button onclick="window.location.reload()">Tirage</button>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>


<style>
    button {
        padding: 10px;
        margin-top: 20px;
    }

    .row {
        width: 300px;
        margin: auto;
        border: 1px solid black;
        text-align: center;
        padding: 20px;
    }
    h4 {
        padding:0;
        margin:0;
    }
    p {
        margin-top: 20px;
    }
    @media screen and (min-width: 576px) {
        div {
            width: 600px;
        }
    }
</style>