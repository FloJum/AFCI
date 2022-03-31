<?php
include "Controller.php";
?>
<!DOCTYPE html>
<html lang="fr">
<header>
    <?php include "./myincludes/Header.php"; ?>
    <div class="" id="divblockheader">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="4500">
            <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="medias/sejours/cuba.jpg" alt="cuba" />
                    <div class="carousel-caption d-md-block">
                        <h3>VAMOS A CUBA</h3>
                        <p>
                            Coktail, musique <br />
                            vintage et cocotier
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="medias/sejours/randofamily.jpg" alt="rando pyrénées" />
                    <div class="carousel-caption d-md-block">
                        <h3>UN BOL D'AIR DANS LES PYRENEES</h3>
                        <p>
                            Connexion avec la nature<br />
                            Montagne en famille
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="medias/sejours/balirice.jpg" alt="bali rice" />
                    <div class="carousel-caption d-md-block">
                        <h3>DEPAYSEMENT ET FOLCKORE A BALI</h3>
                        <p>
                            Suivez les divinités <br />
                            et contemplez la nature
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="medias/sejours/vttsport.jpg" alt="vtt de descente alpes" />
                    <div class="carousel-caption d-md-block">
                        <h3>SPORT ET DESCENTES DANS LES ALPES</h3>
                        <p>
                            3000 km de pistes <br />
                            de quoi rider tous les jours
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="medias/sejours/duosvacmaldive.jpg" alt="maldive romantique" />
                    <div class="carousel-caption d-md-block">
                        <h3>MALDIVE EN DUOS</h3>
                        <p>
                            Chill luxe <br />
                            and romance
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="medias/sejours/campingvillageenfant.jpg" alt="Nice camping famille" />
                    <div class="carousel-caption d-md-block">
                        <h3>NICE EN FAMILLE</h3>
                        <p>
                            Des tobogans et<br />
                            des activités pour tous
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>

<body>
    <div class="accueil">
        <div class="row">
            <h1 class="col-12 text-center">Bienvenue <?php echo isset($_SESSION['user_type']) ? $_SESSION['user_name'] . " " . $_SESSION['user_forename'] : "Visiteur"; ?> !</h1>
            <div class="debug text-center">
                <h4>Debug mode PHP</h4>
                <form method="post" action="Controller.php" class="col-6 offset-3 text-center">
                    <button name="admin">admin </button>
                    <button name="membre">membre</button>
                    <button name="vide">vide</button>
                    <button name="null">null</button>
                    < <?php if (isset($_SESSION['user_type'])) : {
                                var_dump($_SESSION['user_type']);
                                //." ".var_dump($_SESSION['user_email'])." ".var_dump($Ch_email)." ".var_dump($Ch_name)." ".var_dump($Ch_forename);
                            }
                        endif; ?> </form>
            </div>
        </div>
    </div>
    <?php require "myincludes/Footer.php"; ?>
</body>
</html>