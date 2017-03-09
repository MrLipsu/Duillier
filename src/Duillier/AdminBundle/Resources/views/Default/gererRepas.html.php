<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

$reponse = $bdd->query('SELECT * FROM Jour');
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

    <?php
      while ($donnees = $reponse->fetch()){
        $query = $bdd->query('SELECT SUM(nbRepas) AS nbRepas
                              FROM Participation p JOIN Occupe o ON p.idLivret=o.numLivret
                              JOIN Jour j ON j.date=o.date
                              WHERE j.date=\''.$donnees['date'] .'\'');
        $data = $query->fetch();
        echo $donnees['date'] ." : ".$data['nbRepas']." repas réservés.<br>";
      }
    ?>


  </body>

</html>
