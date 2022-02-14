<?php
//procedure
function perimetre(int $cote){
    $peri=$cote *4;
    $surf=$cote*$cote;
    $diag=sqrt(2*pow($cote,2));
    echo "La perimetre est".$peri."<br>";
    echo "La surface est .$surf. <br>";
    echo 'La diagonal est'.$diag.'<br>';
}
//fonctions
//function perimetre($cote){
    //return $cote*4;
//}
/*function surface(int $cote):int{
    return $cote*$cote;
}
function diagonal(int $cote):float{
    return sqrt(2*pow($cote,2));
}*/