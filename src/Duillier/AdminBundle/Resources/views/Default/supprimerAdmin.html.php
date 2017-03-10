<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8','root','root');
$reponse = $bdd->query('SELECT * FROM Admin WHERE login=\''.$_GET['login'].'\'');
$donnees = $reponse->fetch();
?>

      <h4 class="text-center">Etes-vous sûr de vouloir de supprimer l'administrateur : <?php echo $donnees['login'] ?> ?</h4>
      <form action="../app_dev.php/gestionAdmin" method="post">
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" value="Supprimer" class="btn btn-danger">
          </div>
        </div>
        <input type="hidden" name="supprimer" value="">
        <input type="hidden" name="login" value='<?php echo $donnees['login'] ?>'>
        <a href="<?php echo $view['router']->path('duillier_admin_gestionAdmin') ?>" class="btn btn-info">Annuler</a>
      </form>

<?php $view['slots']->stop() ?>
