<?php
function calculatrice(int $a,int $b):void{
$somme=$a+$b;
$expo=pow($a,$b);
$diff=$a-$b;
$produits=$a*$b;
$modulo=fmod($a,$b);
$div=$a/$b;
$carre_a=pow($a,2);
$carre_b=pow($b,2);
echo "La somme est $somme <br>";
echo "L'expo est $expo <br>";
echo "La diff est $diff <br>";
echo "Le produit est $produit <br>";
echo "Le modulo est $modulo <br>";
echo "La div est $div <br>";
echo "Le carre de a est $carre_a <br>";
echo "Le carre de b est $carre_b <br>";
}