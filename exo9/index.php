<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>exo9</title>
</head>
<body>
  <div id="container">

  <form action="controller.php" method="post">
    
    <label for="">Entrer un nombre</label><br>
      <input type="text" name="nombre" id="" value="<?php if(!isset($_SESSION['error']['nombre']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nombre']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['nombre'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['nombre'] ?></span>
      <?php endif?>
      <br>
    

      <input type="submit" name="bouton" id="" value= "Valider">
      

</form>
  </div>
</body>
</html>


<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
}

?>