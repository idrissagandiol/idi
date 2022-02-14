<?php

function validenombre($n,$cle,array &$tab):void 
{
    if(empty($n))
    {
        $tab[$cle]="veuillez remplir le champ nombre";
    }
    else
    {
         if(!is_numeric($n))
        {
            $tab[$cle]="veuillez entre un  nombre le champ";
        }
        else
        {
            if($n<=0)
            {
                $tab[$cle]="veuillez saisis un nombre positif";
            }
            
        }
    }
}




function champ($n):void
{
    for($i=2;$i<$n;$i=$i+1)
    {
        echo "<br><input></br>";
    }
}