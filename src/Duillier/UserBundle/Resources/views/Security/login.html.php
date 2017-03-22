<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>


  <?php if($error)
    echo "<div class='alert alert-danger'>Login ou mot de passe incorrecte</div>";
  ?>

  <form action="<?php echo $view['router']->path('login_check') ?>" method="post">
    <label for="username">Login :</label>
    <input type="text" id="username" name="_username" value="<?php $last_username ?>" />

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="_password" />
    <br />
    <input type="submit" value="Connexion" />
  </form>

  <?php $view['slots']->stop() ?>
