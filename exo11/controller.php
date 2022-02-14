<?php
include_once("fonctions.php");
session_start();
if(isset($_POST['bouton']))
{
    $nbr=$_POST['nbr'];
    $tab1=[];
    $tab2=[];
    $tab=[];
    $tabg=[];
    $tab=[];
    $_SESSION['post']=$_POST;
    $arrError=[];
    $moy=moyenne($nbr);
    validenombre($nbr, "nbr",$tab);
    var_dump($tab);    
    //calcul($nbr,$moy,$tab1,$tab2,$tab3);
    
    //$tabg=asossiatif($tab,$tab2, $tab3);
    /*$_SESSION['tab']=$tabg;
        $_SESSION['error']=$tab;
        var_dump ($tab);
        header('location:index.php');*/ 

}
else
{
    header("location:index.php");
    
}

