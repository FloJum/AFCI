<?php $b= '<br>';
echo "J'apprends  l'art  du PHP."; 
echo$b;

$text2 = "Sur un ordinateur il n'est pas judicieux de taper \"del c:\*.*\"";
echo$text2;
echo$b;

echo "L'information du jour est que le \$PHP c'est cool. ";
echo$b;

echo$_SERVER["HTTP_USER_AGENT"];
echo$b;
echo basename (__FILE__, '.php');
echo$b;

$a = array("nom" =>  "Marc",  "age" => 21);
$b = array("nom" => "Pierre", "age" => 18);
$c = array("nom" => "Marie", "age" => 25);


echo "<tr><td>$a["nom"]</td><td>$a["age"]</td></tr>";

$tab = array(1.1.1.2.3.5.5.5.6.7.9)
?>
