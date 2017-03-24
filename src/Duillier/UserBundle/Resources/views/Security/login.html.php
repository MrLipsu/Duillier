<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>


<?php
if($error)
{
  //var_dump($error);
  echo "<div class='alert alert-danger'>Login ou mot de passe incorrecte</div>";
}
?>

<form action="<?php echo $view['router']->path('login_check') ?>" class="form-horizontal" method="post">
  <fieldset>

    <!-- Form Name -->
    <legend class="text-center">Formulaire de Connexion</legend>

    <!-- Email input-->
    <div class="form-group">
      <label class="col-md-5 control-label"for="username">Email</label>
      <div class="col-md-2">
        <input class="form-control input-md" placeholder="Email"type="text" id="username" name="_username" value="<?php $last_username ?>" />
      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-5 control-label" for="password">Mot de passe </label>
      <div class="col-md-2">
        <input class="form-control input-md" placeholder="Mot de Passe" type="password" id="password" name="_password" />
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <!--<label class="col-md-4 control-label" for="singlebutton">Valider</label>-->
      <div class="col-md-12 text-center">
        <input class="btn btn-primary" type="submit" value="Connexion" />
      </div>
    </div>
  </fieldset>
</form>

<?php $view['slots']->stop() ?>
