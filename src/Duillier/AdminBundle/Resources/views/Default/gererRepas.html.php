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
        $query = $bdd->query('SELECT SUM(nbRepas) AS nbRepas, count(*) AS nbRangeur
                              FROM Participation p
                              JOIN Occupe o ON p.idLivret=o.numLivret
                              JOIN Jour j ON j.date=o.date
                              WHERE j.date=\''.$donnees['date'] .'\'');
        $data = $query->fetch();

        echo "<h4>".$donnees['date']."</h4><br>";
        echo "<ul>";
        echo "<li>".$data['nbRepas']." repas réservés.</li><br>";
        echo "<li>".$data['nbRangeur']." rangeurs réservés.</li><br>";
        echo "</ul><br><br>";
      }
    ?>

<?php $view['slots']->stop() ?>
