<?php
function asossiatif(array &$tab1,array &$tab2, &$tab3):array
{
    $tabg['premrier']=$tab1;
    $tabg['inferieur']=$tab2;
    $tabg['superieur']=$tab3;
    return $tabg;
}
function calcul($nbr, $moy,array &$tab1,array &$tab2, &$tab3):void{
    for($i=1;$i<=$nbr;$i++){
        if(premiere($i)){
            $tab1[]=$i;
        }
        if($i<=moyenne($nbr)){
            $tab2[]=$i;
        }
        else{
            $tab3[]=$i;
        }
    }
   
}
function moyenne($nbr):float
{
    $somme=0;

    for($i=1;$i<=$nbr;$i=$i+1)
    {
        $somme=$somme+$i;
    }
    $moy=$somme/$nbr;

    return $moy;
}
function premiere($nbr):bool
{

    for($i=2;$i<=$nbr/2;$i++)
    {
        if($nbr%$i==0)
        {

            return false;
        }
       
    }
    return true;
}
function validenombre($nbr,string $key,array &$tab):void
{
    if(empty($nbr))
    {
        $tab[$key]="veuillez remplire  le champ !!!";
    }
    else
    {
        if(is_numeric($nbr))
        {
            if($nbr<10000)
            {
                $tab[$key]="veuillez saisair un nombre superieur a 10000";
               
            }
        }
        else
        {
            $tab[$key]="veuillez saisir un nombre";

        }
    }
}