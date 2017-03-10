<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
//connexion a la bdd
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');
?>
    <h1 class="page-header text-center">Ajout administrateur</h1>
        <form class="form-horizontal " method="post"  action="gestionAdmin">
          <div class="form-group">
            <label  class="col-sm-4 control-label"for="login">Nom d'utilisateur</label>

            <div class="col-sm-3">
              <input type="text" id="login" name="login" class=" form-control " onblur="verifNom(this)" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-4 control-label"for="mdp">Mot de passe</label>

            <div class="col-sm-3">
              <input type="password" id="mdp" name="mdp" class=" form-control " onblur="verifNom(this)" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-4 control-label"for="mdp2">Confirmez votre mot de passe </label>

            <div class="col-sm-3">
              <input type="password" id="mdp2" name="mdp2" class=" form-control " onblur="verifNom(this)" value="" required>
            </div>
          </div>

          <div class="col-sm-6">
            <input type="submit" name="validerAjoutAdmin" class="btn btn-success btn-s" value="Valider">
            <input type="hidden" name="validerAjoutAdmin">
            <a href="<?php echo $view['router']->path('duillier_admin_gestionAdmin') ?>" class="btn btn-warning">Annuler</a>
          </div>

        </form>
<?php $view['slots']->stop() ?>
