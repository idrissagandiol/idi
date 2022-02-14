<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>exo6</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <form action="controler.php" method="post">
    <label for="">Nombre a</label><br>
      <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php endif?>
      <br>
    <label for="">Nombre b</label><br>
      <input type="text" name="b" id="" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>" >
      <?php if(isset($_SESSION['error']['b'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
      <?php endif?>
      <br>
    <label for="">Nombre c</label><br>
      <input type="text" name="c" id="" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>">
        <?php if(isset($_SESSION['error']['c'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
        <?php endif?>
      <br><br>

      <input type="submit" name="btn_ok" id="" value= "Envoyez">   

</form>
  </div>
</body>
</html>


<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>