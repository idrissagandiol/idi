<?php

    include_once("fonctions.php");
    session_start();

    if(isset($_POST["bouton"]))
    {
        $jour=$_POST['jour'];
        $mois=$_POST['mois'];
        $anne=$_POST['anne'];
        $_SESSION['post']=$_POST;
        $tab=[];
        validejours($jour,"jour",$tab);
        validemois($mois,"mois",$tab);
        valideanne($anne,"anne",$tab);
        datevalide($jour,$mois,$anne,"erreur",$tab);
        if(count($tab)==0)
        {
            datesuivante($jour,$mois,$anne);
            dateprecedente($jour,$mois,$anne);

        }
        else
        {
            $_SESSION['error']=$tab;
            var_dump ($tab);
            header('location:index.php'); 
            exit();
        }

    }
    else
    {
        header("location:index.php");
        exit();
    }






