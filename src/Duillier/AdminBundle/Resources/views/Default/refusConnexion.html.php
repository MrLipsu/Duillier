<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>



  <div class="alert alert-danger" role="alert">Connexion refusée</div>
  <a href="<?php echo $view['router']->path('duillier_admin_connexionAdmin') ?>">Réessayer</a>

<?php $view['slots']->stop() ?>
