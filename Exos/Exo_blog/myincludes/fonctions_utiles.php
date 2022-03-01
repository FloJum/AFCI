<?php
function protect_montexte($param) {
    $param = trim($param);
    $param = stripslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}

// Pour vérifier l'entrer  email :
    /* $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } */
?>