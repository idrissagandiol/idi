<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>exo11</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 class="h1">Tableaux de remplissage</h1>
  <div class="container">
  <form action="controller.php" method="post">
    <label for="">Entre une valeur</label><br>
      <input type="text" name="nbr" id="" value="<?php if(!isset($_SESSION['error']['nbr']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nbr']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['nbr'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['nbr'] ?></span>
      <?php endif?>
      <br><br>
    

      <input type="submit" name="bouton" id="" value= "Valider">    

</form>
<?php
if(isset($_SESSION['tab']))
{
    
              
}
?>
  </div>
</body>
</html>


<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>