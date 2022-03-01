<?php
$nom=null;

// on test si action a qqchose ou a deconnecter
// on supprime le nom de cookie, mais pas suffisant
// on supprime le cookie en mettant une date dans le passé
if(!empty($_GET['action'] && $_GET['action']==='deconnecter')){
    unset($_COOKIE['user']);
    setcookie('user','',time()-10);
}

// on recup le cookie si pas vide
if(!empty($_COOKIE['user'])){
    $nom=$_COOKIE['user'];
}

// on test si l'input pas vide
// on crée le cookie et recup le nom
if(!empty($_POST['nom'])){
    setcookie('user',$_POST['nom'],0);
    $nom=$_POST['nom'];
}

?>


<?php if($nom):?>
    <!-- on test s'il y a un nom donc un cookie de créé -->
    <h1>Bonjour <?= htmlentities($nom)?></h1>
    <!-- on creer un boutton se deconnecter -->
    <a href="profile.php?action=deconnecter">Se déconnecter</a>
    <?php else:?>
        <!-- sinon on affiche le form -->
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" name="nom" placeholder="votre nom">
            </div>
            <button class="btn btn-primary">Se connecter</button>
        </form>
<?php endif;?>

