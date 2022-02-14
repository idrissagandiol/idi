<?php
include_once("fonctions.php");
  $long=rand(1,100);
  $larg=rand(1,100);
  $perimetre=perimetre($long,$larg);
  echo "le perimetre est $perimetre <br>";

  $surface=surface($long,$larg);
  echo "La surface est $surface <br>";

  $diagonal=diagonal($long,$larg);
  echo "La  diagonal est $diagonal <br>";
?>