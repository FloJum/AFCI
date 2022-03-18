<?php
function protect_montexte($param) {
    $param = trim($param);
    $param = stripslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}
// function protection_minimal($param,$var) {
//  mysqli_real_escape_string($var);
// }
function check_mdp_format($mdp) {
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 3)
	{
		return false;
	}
	else 
		return true;
}

// Pour vérifier l'entrer  email :
    /* $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } */
