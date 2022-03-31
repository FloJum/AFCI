<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUNNY DAYS</title>
  <link rel="shortcut icon" href="medias/logosunnydays.png">
  <link rel="stylesheet" href="bootstrap/bootstrap copie.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<nav id="navbarre" class="navbar navbar-expand-sm navbar-light fixed-top">
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="Index.php" class="nav-link"><img class="logohome" src="medias/logosunnydays.png" alt="Logo home"></a>
      </li>
      <li class="nav-item">
        <a href="Sejours.php" class="nav-link">SEJOURS</a>
      </li>
      <li class="nav-item">
        <a href="Apropos.php" class="nav-link">A PROPOS</a>
      </li>
      <li class="nav-item">
        <a href="Team.php" class="nav-link">TEAM</a>
      </li>
      <li class="nav-item">
        <a href="Contact.php" class="nav-link">CONTACT</a>
      </li>
      <?php if (isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])) :
        if ($_SESSION['user_type'] == '["membre"]') : ?>
          <li class="nav-item">
            <a href="Blog.php" class="nav-link">BLOG</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="Blog.php" class="nav-link">BLOG</a>
          </li>
          <li class="nav-item">
            <form class="navbar-form my-2 my-sm-0" action="Admin.php">
              <button class="btn btnad"><i class="fa fa-user-circle"></i> ADMIN</button>
            </form>
          </li>
      <?php endif;
      endif; ?>
      <?php if (isset($_SESSION['user_type'])) : ?>
        <li class="nav-item">
          <form class="navbar-form my-2 my-sm-0" action="Controller.php" method="POST">
            <button class="btn btndec" type="submit" name="logout"><i class="fa fa-sign-out"></i>DECONNEXION</button>
          </form>
        </li>
      <?php else :  ?>
        <li class="nav-item">
          <form class="navbar-form my-2 my-sm-0" action="Login.php">
            <button type="submit" class="btn btnlog"><i class="fa fa-sign-in"></i> MEMBRE</button>
          </form>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div>
  <div class="titre">
    <h1>
      SUNNY DAYS <img src="medias/avion.png" alt="avionplage">
    </h1>
  </div>
</div>