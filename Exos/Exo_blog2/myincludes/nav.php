<?php if (empty ($_COOKIE['role'])) {
  $_COOKIE['role']= "";
}
?>
<link rel="stylesheet" href="../exo_blog/css/bootstrap.min.css" />

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="apropos.php">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <?php  ?>
        
      <?php if (empty($_COOKIE['user_logged'])) : ?>
        <form class="navbar-form my-2 my-sm-0" action="login.php">
          <button type="submit" class="btn btn-success">Membre</button>
        </form>
      <?php else : switch($_COOKIE['role']) : case "visiteur" : ?>
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        </ul>
        <?php break; case "admin" :?>
          <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <button class="btn btn-light btnAdmin me-3 ">Admin</button>
        </ul>
        <?php break; endswitch; ?>
        <form class="navbar-form my-2 my-sm-0" action="deconnexion.php">
          <button class="btn btn-danger ">Déconnexion</button>
      </form>
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