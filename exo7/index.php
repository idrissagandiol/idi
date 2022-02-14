<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo>7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="idi">
<form action="controler.php" method="post">
	
    <div class="lab">
        <labe>Jours</label> <br>
        <input type="text" name="jour" id="" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['jour']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['jour'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
      <?php endif?><br>

        <label>Mois</label> <br>
        <input type="text" name="mois" id="" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php endif?><br>

        <label>Annee </label> <br>
        <input type="text" name="anne" id="" value="<?php if(!isset($_SESSION['error']['anne']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['anne']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['anne'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['anne'] ?></span>
      <?php endif?><br><br>

        <input type="submit" value="Valider" name="bouton">
     </div>

</form>

</div>

</body>
</html>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
