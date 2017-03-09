<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM Club WHERE idClub=\'' . $_GET['idClub'] . '\'');
$donnees = $reponse->fetch();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nouveau concours</title>

  <link href="<?php echo $view['assets']->getUrl('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo $view['assets']->getUrl('css/SignInBundle/style.css') ?>" rel="stylesheet" />
</head>


<body>
  <h1 class="page-header text-center ">Suppression du club</h1>
  <p class="bg-danger text-center">Êtes-vous sûr de vouloir supprimer le club <?php echo $donnees['nom']; ?>?</p>

  <form class="form-horizontal" action="../gestionClub" method="post">
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <input type="submit" class="btn btn-success" value="Supprimer"></input>
      <a href="../gestionClub" class="btn btn-warning">Annuler</a>
    </div>
  </div>
  <input type="hidden" name="enregistrerSupprimer" value="">
  <input type="hidden" name="idClub" value='<?php echo $donnees['idClub']; ?>'>
</form>

</body>
</html>
