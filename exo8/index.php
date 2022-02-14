<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>exo8</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <form action="controller.php" method="post">
    <div>
    <label for="">Entre un ombre</label><br>
      <input type="text" name="nombre" id="" value="<?php if(!isset($_SESSION['error']['nombre']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nombre']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['nombre'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['nombre'] ?></span>
      <?php endif?>
      <br><br>
    

      <input type="submit" name="bouton" id="" value= "Valider">   

</form>
  </div>
</body>
</html>


<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>