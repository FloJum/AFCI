<link rel="stylesheet" href="../exo_blog/css/bootstrap.min.css" />

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="apropos.php">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="livres.php">Livres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commande.php">Commande</a>
        </li>
        <?php if (!isset($_SESSION['role'])) : ?>
          <li class="nav-item">
            <form class="navbar-form my-2 my-sm-0" action="login.php">
              <button type="submit" class="btn btn-success">Membre</button>
            </form>
          </li>
          <?php else : switch ($_SESSION['role']):
            case "membre": ?>

              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>

            <?php break;
            case '["admin"]': ?>

              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <form class="navbar-form my-2 my-sm-0" action="admin_book.php">
                  <button class="btn btn-light btnAdmin">Admin</button>
                </form>
              </li>
      </ul>
  <?php break;
          endswitch; ?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <form class="navbar-form my-2 my-sm-0" action="deconnexion.php">
        <button class="btn btn-danger ">Déconnexion</button>
      </form>
    </li>
  </ul>
<?php endif; ?>
    </div>
  </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
  .navbar {
    background-color: #2fa4e7;
    border-bottom: 2px solid #033c73;
    padding: 10px 0px;
  }
</style>