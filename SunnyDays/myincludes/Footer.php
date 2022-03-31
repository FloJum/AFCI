<?php
include "./myincludes/DBlogin.php";
if (isset($_POST['newsinscr'])) {
    if (isset($_POST['mailnewsinscr']) && !empty($_POST['mailnewsinscr'])) {
        $newsemail = protect_montexte(mysqli_real_escape_string($conn, $_POST['mailnewsinscr']));
        if (!filter_var($newsemail, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Le format de l'adresse email est invalide.";
        } else {
            $dateinscr = date('y-m-d h:i:s');
            $sql = "SELECT * FROM newsletter WHERE email LIKE '$newsemail'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $Err_news_add = "Vous êtes déjà inscrit à la newsletter";
            } else {
                mysqli_free_result($result);
                $sql = "INSERT INTO newsletter (email, date_inscription) VALUES ('$newsemail','$dateinscr')";
                $newsinscr = mysqli_query($conn, $sql);
                mysqli_close($conn);
                $Conf_news_inscr = "Vous êtes désormais inscrit à la newsletter";
            }
        }
    } else {
        $Err_news_add = "Tous les champs doivent être remplis !";
    }
}
?>

<div class="container">
    <div class="bonplan">
        <h2>NOS BONS PLANS</h2>
        <div class="row-bonplans">

            <div class="bp">
                <a href="Sejours.php" target="blank" class="bpp">
                    <img src="medias/bonplan/bptahiti.jpg" class="bppp" alt="bon plan tahiti">
                </a>
                <h5 class="titrebp">TAHITI</h5>
                <img class="off" src="medias/30offyellow2.png" alt="30off">

            </div>
            <div class="bp">
                <a href="Sejours.php" target="blank" class="bpp">
                    <img src="medias/bonplan/bpcampingvillage.jpg" class="bppp" alt="camping village">
                </a>
                <h5 class="titrebp">NICE</h5>
                <img class="3off" src="medias/30offyellow2.png" alt="30off">
            </div>
            <div class="bp">
                <a href="Sejours.php" target="blank" class="bpp">
                    <img src="medias/bonplan/bpguyana.jpg" class="bppp" alt="bon plan guyane">
                </a>
                <h5 class="titrebp">GUYANE</h5>
                <img class="3off" src="medias/30offyellow2.png" alt="30off">
            </div>
            <div class="bp">
                <a href="Sejours.php" target="blank" class="bpp">
                    <img src="medias/bonplan/bpsportbali.jpg" class="bppp" alt="sport bali">
                </a>
                <h5 class="titrebp">BALI</h5>
                <img class="3off" src="medias/30offyellow2.png" alt="30off">
            </div>


        </div>
    </div>


    <div class="vacancetype">
        <div class="critere">
            <a href="Sejours.php" target="blank" class="crit">
                <img src="medias/beach.png" alt="beach">
            </a>
            <h5>PLAGE</h5>
        </div>
        <div class="critere">
            <a href="Sejours.php" target="blank" class="crit">
                <img src="medias/mountain.png" alt="mountains">
            </a>
            <h5>MONTAGNE</h5>
        </div>
        <div class="critere">
            <a href="Sejours.php" target="blank" class="crit">
                <img src="medias/family.png" alt="family">
            </a>
            <h5>FAMILLE</h5>
        </div>
        <div class="critere">
            <a href="Sejours.php" target="blank" class="crit">
                <img src="medias/duos.png" alt="couple">
            </a>
            <h5>DUOS</h5>
        </div>
        <div class="critere">
            <a href="Sejours.php" target="blank" class="crit">
                <img src="medias/sport.png" alt="sport">
            </a>
            <h5>SPORT</h5>
        </div>
    </div>

    <div class="myclub">
        <a href="Register.php" id="club">
            <div class="club">
                <h2>
                    CLUB SUNNY DAYS
                </h2>
                <img src="medias/10offred.png" alt="10percent">

            </div>
        </a>
    </div>


    <div class="nosengagements">
        <h2>
            NOS ENGAGEMENTS
        </h2>
        <div class="durable">
            <div class="engagement">
                <img src="medias/ecology.png" alt="ecologique">
                <p class="qualite">ACTEURS DU TOURISME DURABLE</p>
            </div>
            <div class="engagement"><img src="medias/quality.png" alt="quality">
                <p class="qualite">DES PRESTATIONS A LA HAUTEUR DE VOS ATTENTES</p>

            </div>
            <div class="engagement"><img src="medias/customer-service.png" alt="SAV">
                <p class="qualite">UN SAV REACTIF <br> ET A L'ECOUTE DE VOS BESOINS</p>

            </div>
            <div class="engagement"><img src="medias/geoloc.png" alt="everywhere">
                <p class="qualite"> PLUS DE 800 AGENCES SUNNY DAYS DANS LE MONDE</p>

            </div>

        </div>

    </div>

    <div class="newsletter">
        <div class="newsleft">
            <img id="imgletter" src="medias/newslettercarre.jpg" alt="newsletter">
        </div>
        <div class="newsright">
            <h4>
                Pour ne rien rater, <br> inscrivez-vous a la newsletter !
            </h4>
            <div class="input-group">
                <form method="post">
                    <input class="inputnews" type="email" name="mailnewsinscr" placeholder="Entrez votre email 😊">
                    <button class="btnnews" type="submit" name="newsinscr">Let's Go !</button>
                </form>
            </div>
        </div>
        <?php if (isset($newsinscr) && $newsinscr == true) { ?>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $Conf_news_inscr ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="paiment">
        <h4>
            PAIEMENTS AUTORISES
        </h4>
        <div class="cards">
            <div class="card">
                <a href="https://www.mastercard.fr/fr-fr.html" target="blank" class="pay">
                    <i class="fa fa-cc-mastercard"></i>
                </a>
            </div>
            <div class="card">
                <a href="https://www.americanexpress.com/fr-fr/?inav=NavLogo" target="blank" class="pay">
                    <i class="fa fa-cc-amex"></i>
                </a>
            </div>
            <div class="card">
                <a href="https://www.visa.fr/payer-avec-visa/ma-carte-visa/visa-premier.html" target="blank" class="pay">
                    <i class="fa fa-cc-visa"></i>
                </a>
            </div>
            <div class="card">
                <a href="https://www.paypal.com/fr/webapps/mpp/home" target="blank" class="pay">
                    <i class="fa fa-cc-paypal"></i>
                </a>
            </div>
            <div class="card">
                <a href="https://www.edenred.fr/ticket-restaurant" target="blank" class="pay">
                    <i class="fa fa-cc-diners-club"></i>
                </a>
            </div>
            <div class="card">
                <a href="https://www.ancv.com/" target="blank" class="pay">
                    <i class="fa fa-credit-card"></i>
                </a>
            </div>
        </div>



    </div>
</div>



<footer>
    <a href="Contact.php" class="linkfooter">NOUS CONTACTER</a>
    <a href="#" class="linkfooter">Mentions légales</a>
    <div class="footer-icons">
        <div class="reseaux">
            <a href="https://www.facebook.com/people/Sunny-Day/100057138544027/" target="blank" class="network">
                <i class="fa fa-facebook"></i>
            </a>
        </div>
        <div class="reseaux">
            <a href="https://www.instagram.com/explore/tags/sunnyday%F0%9F%98%8D/?hl=fr" target="blank" class="network">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
        <div class="arrow">
            <a href="">
                <i class="fa fa-sort-up"></i>
            </a>
        </div>
        <div class="reseaux">
            <a href="https://www.tripadvisor.fr/Hotel_Review-g482942-d17518182-Reviews-Sunny_Days-Fira_Santorini_Cyclades_South_Aegean.html" target="blank" class="network">
                <i class="fa fa-tripadvisor"></i>
            </a>
        </div>
        <div class="reseaux">
            <a href="https://www.youtube.com/watch?v=zVn_2vk6kfk" target="blank" class="network">
                <i class="fa fa-youtube"></i>
            </a>
        </div>
    </div>
    <a href="#" class="linkfooter">CGV</a>
    <p>© Sunny Days 2022</p>

</footer>

<script src="/asset/jquery/jquery-3.6.0.min.js"></script>
<script src="/asset/jquery/jquery-3.6.0.slim.min.js"></script>
<script src="/javascript/aos.js"></script>
<script src="/javascript/javascriptsunnydays.js"></script>