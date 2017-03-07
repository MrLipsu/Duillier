<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8','root','');
$reponse = $bdd->query('SELECT * FROM Admin WHERE login=\''.$_GET['login'].'\'');
$donnees = $reponse->fetch();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Suppression </title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

      <h4 class="text-center">Etes-vous sûr de vouloir de supprimer l'administrateur : <?php echo $donnees['login'] ?> ?</h4>
      <form action="../app_dev.php/gestionAdmin" method="post">
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" value="Supprimer" class="btn btn-danger">
          </div>
        </div>
        <input type="hidden" name="supprimer" value="">
        <input type="hidden" name="login" value='<?php echo $donnees['login'] ?>'>
        <a href="gestionAdmin" class="btn btn-info">Annuler</a>
      </form>



</body>
