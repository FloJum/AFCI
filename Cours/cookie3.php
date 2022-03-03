<?php
$nom = null;

// On teste si action est vide ou est déja le mot déconnecter
// On supprime le nom du cookie
// On supprime le cookie avec date passé
if (!empty($_GET['action'] && $_GET['action'] === "deconnecter")) {
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 10);
}

// On récupère le cookie si pas vide
if (!empty($_COOKIE['user'])) {
    $nom = $_COOKIE['user'];
    echo$_COOKIE['user'];
}

// On teste si l'input est pas  vide
// On crée le cookie et récupère le nom
if (!empty($_POST['nom'])) {
    setcookie('user', $_POST['nom'],0);
    $nom = $_POST['nom'];
}
echo$_COOKIE['user'];

?>


<!-- formulaire et bouton -->

<?php if ($nom) : ?>
    <!-- On teste s'il y a un nom donc un cookie de créé -->
    <h1>Bonjour <?= htmlentities($nom) ?></h1>
    <!-- On crée un bouton se déconnecter -->
    <a href="cookie3.php?action=deconnecter">Se déconnecter</a>
<?php else : ?>
<!-- Sinon on affiche le form -->
    <form method="post">
        <div class="form-group">
            <input type="text" name="nom" placeholder="Votre nom">
        </div>
        <button class="btn btn-primary">Se connecter</button>
    </form>
<?php endif; ?>