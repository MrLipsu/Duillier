<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM Club WHERE idClub=\'' . $_GET['idClub'] . '\'');
$donnees = $reponse->fetch();

?>

  <h1 class="page-header text-center ">Suppression du club</h1>
  <p class="bg-danger text-center">Êtes-vous sûr de vouloir supprimer le club <?php echo $donnees['nom']; ?>?</p>

  <form class="form-horizontal" action="../gestionClub" method="post">
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <input type="submit" class="btn btn-success" value="Supprimer"></input>
      <a href="<?php echo $view['router']->path('duillier_admin_gestionClub') ?>" class="btn btn-warning">Annuler</a>
    </div>
  </div>
  <input type="hidden" name="enregistrerSupprimer" value="">
  <input type="hidden" name="idClub" value='<?php echo $donnees['idClub']; ?>'>
</form>

<?php $view['slots']->stop() ?>
