<?php $br= '<br>';
echo "J'apprends  l'art  du PHP."; 
echo$br;

$text2 = "Sur un ordinateur il n'est pas judicieux de taper \"del c:\*.*\"";
echo$text2;
echo$br;

echo "L'information du jour est que le \$PHP c'est cool. ";
echo$br;echo$br;

echo$_SERVER["HTTP_USER_AGENT"];
echo$br;
echo basename (__FILE__, '.php');
echo$br;

$a = array("nom" =>  "Marc",  "age" => 21);
$b = array("nom" => "Pierre", "age" => 18);
$c = array("nom" => "Marie", "age" => 25);

echo "<table frame='border' border='1' cellpadding='30%' cellspacing='0' style='color : blue' >";
echo"<tr><td>$a[nom]</td><td>$a[age]</td></tr><br>";
echo"<tr><td>$b[nom]</td><td>$b[age]</td></tr><br>";
echo"<tr style='color : green'><td>$c[nom]</td><td>$c[age]</td></tr><br>";
echo"</table>";
echo$br; echo$br;

$tab = array(1,1,1,2,3,5,5,5,6,7,9);
$tabu = array_unique ($tab);
foreach($tabu as $val) {
    echo$val;
}
// print_r($tab);
echo$br;echo$br;

$tab2 = array('lait','oeuf','pain','vin');
echo"<ol style=' background-color: #87CEEB; color: white'>";
for ($i = 0; $i < count($tab2); $i++) {
echo "<li>$tab2[$i]</li>"; };
echo"</ol>";

?>
