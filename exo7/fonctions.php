<?php

function validejours($jour,string $cle,array &$tab):void
{
   if(empty($jour))
   {
       $tab[$cle]="Veuillez saisir le champ jour !!!";
   }
   else
   {
       if(is_numeric($jour))
       {
           if($jour>31 or $jour<1)
           {
                $tab[$cle]="Veuillez saisir un nombre entre 1 et 31!!!";
           }

       }
       else 
       {
            $tab[$cle]="Veuillez saisir un nombre dans  le champ jour !!!";
       }
   }
}
function validemois($mois,string $cle,array &$tab):void 
{
    if(empty($mois))
   {
       $tab[$cle]="Veuillez saisir le champ mois !!!";
   }
   else
   {
       if(is_numeric($mois))
       {
           if($mois>12 or $mois<1)
           {
                $tab[$cle]="Veuillez saisir un nombre entre 1 et 12!!!";
           }

       }
       else 
       {
            $tab[$cle]="Veuillez saisir un nombre dans  le champ mois !!!";
       }
   }
    
}
function valideanne($anne,string $cle,array &$tab):void
{
    if(empty($anne))
   {
       $tab[$cle]="Veuillez saisir le champ annee !!!";
   }
   else
   {
       if(!is_numeric($anne))
       {
           
            $tab[$cle]="Veuillez saisir un nombre dans le champ annnee!!!";
           
        }
    }
}



function bisextille($anne):bool
{
    if(($anne%4==0 && $anne%100!=0)or($anne%400==0))
    {
        return true;
    }
    else
    {
        return false;

    }
    
}

function nbrjour($mois,$anne):int
{
    if($mois==4 or $mois==6 or $mois==9 or $mois==11)
    {
        return 30;
    }
    else
    {
        if($mois==2)
        {
            if(bisextille($anne)==true)
            {
                return 29;
            }
            else
            {
                return 28;
            }

        }
        else
        {
            return 31;
        }
    }
}


function datevalide($jour,$moi,$anne,$cle,array &$tab):void 
{
    $n=nbrjour($moi,$anne);

    if($jour>$n)
    {
        $tab[$cle]="Date invalide!!!";
    }

}
function datesuivante($jour,$mois,$anne):void
{
    
    $n=nbrjour($mois,$anne);

    if($n!=$jour)
    {
        $jour=$jour+1;
                
    }

    else
    {
        $jour=1;

        if($mois==12)
        {
            $mois=1;

            $anne=$anne+1;
        }
        else
        {
            $mois++;
        }
    }
    
    echo "La date suivante est $jour/$mois/$anne"."<br>"."<br>";
}
function dateprecedente($jour,$mois,$anne):void{
    if($jour!=1)
    {
        $jour=$jour-1;
    }
    else
    {
        if($mois==1)
        {
            $jour=31;
            $mois=12;
            $anne=$anne-1;
        }
        else
        {
            $jour=nbrjour($mois-1,$anne);
            $mois=$mois-1;

        }
    }
    echo "La date precedente est $jour/$mois/$anne";
}


