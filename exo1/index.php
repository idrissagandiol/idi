<?php
//charger mes fonctions ou inclure
include_once("fonctions.php");
//generer un nombre maniere
//aleatoire entre 1 et 100
$cote =rand(1,100);
echo "Le cote est".$cote."<br>";

$peri=perimetre($cote);

?>