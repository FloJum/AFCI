<?php
//créer cookie
setcookie("visiteur", "Anderson", time() + 24 * 60 * 60 * 365); //1 an

//modifier  cookie
setcookie("visiteur", "Michel",time() + 24 * 60 * 60 * 365);

//effacer cookie
setcookie("visiteur", "Michel",time() -1);

//vérifier cookie
setcookie ("test", "Charles", time() + 24*60*60*2080); 

isset($_COOKIE['test']);
isset($_COOKIE['visiteur']);
?>

<h1>Le cookie a été crée.</h1>