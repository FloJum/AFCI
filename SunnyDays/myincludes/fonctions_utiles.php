<?php
function protect_montexte($param) {
    $param = trim($param);
    $param = stripslashes($param);
    $param = addslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}
function protection_minimal($param) {
    $param = stripslashes($param);
    $param = addslashes($param);
    $param = htmlspecialchars($param);
}
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

function clear_db($param1, $param2) {
	mysqli_free_result($param1);
    mysqli_close($param2);
}
function convertTZ($dateTimeString, $inputTZ, $outputTZ){
    $datetime = 
        \DateTime::createFromFormat('Y-m-d H:i:s', //input format - iso8601
        $dateTimeString, 
        new \DateTimeZone($inputTZ))
        ->setTimezone(new \DateTimeZone('$outputTZ'));

    //outputs a string, if you want the dateTime obj - remove ->format
    return $datetime->format('Y-m-d H:i:s'); //output format 

}
// function validatePassword($password) {
// 	const re = /(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[!@#$%^&*()+=-?;,./{}|":<>[]\' ~_]).{8,}/
// 	return re.test($password);
// }

// if(!preg_match('^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$',$_POST['password1'])) 

// Pour vérifier l'entrer  email :
    /* $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } */
?>