<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

$reponse = $bdd->query('SELECT * FROM Jour');
?>

    <h1 class="page-header text-center ">Participation</h1>

    <?php
      while ($donnees = $reponse->fetch()){
        $queryRangeur = $bdd->query('SELECT count(*) AS nbRangeur
                              FROM Participation p
                              JOIN Occupe o ON p.idLivret=o.numLivret
                              JOIN Jour j ON j.date=o.date
                              WHERE j.date=\''.$donnees['date'] .'\'');
        $rangeur = $queryRangeur->fetch();

        $queryRepas = $bdd->query('SELECT DISTINCT o.numLivret, nbRepas
                                  FROM Participation p
                                  JOIN Occupe o ON p.idLivret=o.numLivret
                                  WHERE o.date=\''.$donnees['date'] .'\'');
        $nbRepas=0;
        while ($repas = $queryRepas->fetch()){
          $nbRepas = $nbRepas + $repas['nbRepas'];
        }


        echo "<h4>".$donnees['date']."</h4><br>";
        echo "<ul>";
        //echo "<li>".$repas['nbRepas']." repas réservés.</li><br>";
        echo "<li>".$nbRepas." repas réservés.</li><br>";
        echo "<li>".$rangeur['nbRangeur']." rangeurs réservés.</li><br>";
        echo "</ul><br><br>";
      }
    ?>
    <a type="button" class="btn btn-warning" href="<?php echo $view['router']->path('duillier_admin_homepage') ?>">Retour</a>
<?php $view['slots']->stop() ?>
