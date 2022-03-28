<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container d-flex justify-content-around">
    <a class="navbar-brand" href="Index.php">Logo Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Apropos.php">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Sejours.php">Séjours</a>
        </li>
        <?php if (isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])) :
          if ($_SESSION['user_type'] == '["membre"]') : ?>
            <li class="nav-item">
              <a class="nav-link" href="Blog.php">Blog</a>
            </li>
          <?php
          else : ?>
            <li class="nav-item">
              <a class="nav-link" href="Blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <form class="navbar-form my-2 my-sm-0" action="Admin.php">
                <button class="btn btnAdmin">Admin</button>
              </form>
            </li>
          <?php
          endif; ?>
          <!-- Le bouton/li de déconnexion peut se placer ici -->
        <?php endif; ?>
        <!-- le  bouton/li de connexion peut se mettre ici -->
      </ul>

      <!-- Ce ul peut être intégré/supprimé dans le if au-dessus selon le design -->
      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user_type'])) : ?>
          <li class="nav-item">
            <form action="Controller.php" method="POST">
              <button class="btn btn-danger" type="submit" name="logout">Déconnexion</button>
            </form>
          </li>
        <?php
        else :  ?>
          <li class="nav-item">
            <form class="navbar-form my-2 my-sm-0" action="Login.php">
              <button type="submit" class="btn btn-success">Membre</button>
            </form>
          </li>
        <?php
        endif; ?>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* -------------------------------------------------------------------------- /


/                                   navbar                                   /


/ -------------------------------------------------------------------------- */

  .navbar {
    background-color: skyblue !important;
  }

  #logoagence {
    width: 30px;
    height: 30px;
  }

  #navbarColor01 {
    display: flex;
    justify-content: space-around !important;
  }
</style>