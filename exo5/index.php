<?php
include_once("fonctions.php");
$x1=rand(1,100);
$x2=rand(1,100);
$y1=rand(1,100);
$y2=rand(1,100);
$distant=distance($x1,$y1,$x2,$y2);
echo "Le point A est  ($x1,$y1) <br>";
echo "Le point B est ($x2,$y2)<br>";
echo "La distance entre A et B est $distant";
