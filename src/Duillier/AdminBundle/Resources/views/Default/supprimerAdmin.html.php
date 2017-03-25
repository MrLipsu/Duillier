<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php

  include "db/db.php";

$reponse = $bdd->query('SELECT * FROM user WHERE username=\''.$_GET['login'].'\'');

$donnees = $reponse->fetch();
?>

      <h4 class="text-center">Etes-vous sûr de vouloir de supprimer l'administrateur : <?php echo $donnees['username'] ?> ?</h4>
      <form action="<?php echo $view['router']->path('duillier_admin_gestionAdmin') ?>" method="post">
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" value="Supprimer" class="btn btn-danger">
          </div>
        </div>
        <input type="hidden" name="supprimer" value="">
        <input type="hidden" name="login" value='<?php echo $donnees['username'] ?>'>
        <a href="<?php echo $view['router']->path('duillier_admin_gestionAdmin') ?>" class="btn btn-info">Annuler</a>
      </form>

<?php $view['slots']->stop() ?>
