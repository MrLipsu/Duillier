<!-- app/Resources/views/base.html.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $view['slots']->output('title', 'Duillier') ?></title>
        <link href="<?php echo $view['assets']->getUrl('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet" />
        <link href="<?php echo $view['assets']->getUrl('css/base.css') ?>" rel="stylesheet" />
        <script src="<?php echo $view['assets']->getUrl('jQuery/jQuery.js') ?>"></script>
        <script src="<?php echo $view['assets']->getUrl('jQuery/notiModal.min.js') ?>"></script>

        <script src="<?php echo $view['assets']->getUrl('jQuery/adminBundle/nouveauConcours.js') ?>"></script>

    </head>
    <body>
        <div id="header">
          <header>
            <div id="titre" class="row" style="display: inline-block; width: 100%;">
              <div class="col-md-2">
                <img src="<?php echo $view['assets']->getUrl('images/logotitreduillier.png') ?>" class="img-circle img-responsive logo" style="width:100px;height:auto;float: left; margin:10px;" >
              </div>
              <div class="col-md-8 text-center">
                <p style="display: inline-block;">Inscription Perce-Neige <?php echo date('Y'); ?></p>
              </div>
              <div class="col-md-2" id="bouton">
                <div class="row">
                  <?php
                  //var_dump($this);
                  //var_dump($this->get('security'));
                  //var_dump($this->get('security'));
                  if ($view['security']->isGranted('ROLE_USER')){
                    echo "<a href=".$view['router']->path('logout')." class='btn btn-warning' class='login'>Deconnexion</a>";
                    if ($view['security']->isGranted('ROLE_ADMIN')){
                      echo "<a href=".$view['router']->path('duillier_admin_homepage')." class='btn btn-warning' class='login'>Gestion Administrateur</a>";
                    }
                    if ($view['security']->isGranted('ROLE_GROUP')){
                      echo "<a href=".$view['router']->path('duillier_sign_in_groupe')." class='btn btn-warning' class='login'>Gestion Des groupes</a>";
                    }
                  }else{
                    echo "<a href=".$view['router']->path('login')." class='btn btn-warning' class='login'>Connexion</a>";
                  }
                  ?>

                </div>
              </div>
          </div>
        </header>
        </div>

        <div id="content">
            <?php $view['slots']->output('body') ?>
        </div>
    </body>
</html>
