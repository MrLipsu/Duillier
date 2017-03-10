<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

    <h1 class="page-header text-center">Connexion administrateur</h1>
        <form class="form-horizontal " method="post"  action="verifConnexionAdmin"  >
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

          <div class="col-sm-6">
            <input type="submit" name="connexionAdmin" class="btn btn-success btn-s" value="Connexion">
            <input type="hidden" name="connexionAdmin">
            <a href="<?php echo $view['router']->path('duillier_planning_homepage') ?>" class="btn btn-warning">Annuler</a>
          </div>

        </form>
<?php $view['slots']->stop() ?>
