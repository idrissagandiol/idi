<?php 
include_once("fonctions.php");

  session_start();
if(isset($_POST['bouton'])){
    $n=$_POST['nombre'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validenombre($n,"nombre",$arrError);
    if(count($arrError)==0)
    {
        champ($n);
        
    }
    else
    {
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}
