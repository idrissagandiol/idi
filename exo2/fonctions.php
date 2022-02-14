<?php
function perimetre( int $long,int $larg):int{
    return(($long+$larg)*2);

}
function surface(int $long,int $larg):float{
    return ($long*$larg);
}
function diagonal(int $long,int $larg){
    return (sqrt(pow($long,2)+pow($larg,2)));

}
