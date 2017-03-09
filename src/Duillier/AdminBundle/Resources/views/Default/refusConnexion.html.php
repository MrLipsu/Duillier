
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Connexion refusée</title>

  <link href="<?php echo $view['assets']->getUrl('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo $view['assets']->getUrl('css/SignInBundle/style.css') ?>" rel="stylesheet" />
</head>


<body>
  <div class="alert alert-danger" role="alert">Connexion refusée</div>
  <a href="connexionAdmin">Réessayer</a>
</body>
</html>
