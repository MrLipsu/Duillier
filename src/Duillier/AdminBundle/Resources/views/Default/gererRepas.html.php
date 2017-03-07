<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nouveau concours</title>
  <link href="<?php echo $view['assets']->getUrl('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo $view['assets']->getUrl('css/SignInBundle/style.css') ?>" rel="stylesheet" />
</head>

  <body>
    <h1 class="page-header text-center ">Gestion des repas</h1>

  </body>

</html>
