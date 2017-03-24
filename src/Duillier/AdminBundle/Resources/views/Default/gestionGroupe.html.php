<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');
$clubQuery = $bdd->query('SELECT DISTINCT c.nom
                        FROM Participation p
                        JOIN tireur t ON p.idLicence=t.idLicence
                        JOIN club c ON c.idClub=t.idClub
                        ORDER BY c.nom');
?>
<h1 class="page-header text-center ">Gestion des groupes</h1>
<?php
while ($club = $clubQuery->fetch()){
  echo "<h3>".$club['nom']."</h3>";
  $reponse = $bdd->query('SELECT p.numGroupe, t.nomTireur, t.prenomTireur
                          FROM Participation p
                          JOIN tireur t ON p.idLicence=t.idLicence
                          JOIN club c ON c.idClub=t.idClub
                          WHERE c.nom=\''.$club['nom'].'\' AND p.isInGroupe=1
                          ORDER BY p.numGroupe');

  echo "<ul>";
  while($donnees = $reponse->fetch()){
    echo "<li>".$donnees['prenomTireur']." ".$donnees['nomTireur']." -- Groupe ".$donnees['numGroupe']."</li>";    
  }
  echo "</ul>";
}

 ?>

    <a type="button" class="btn btn-warning" href="<?php echo $view['router']->path('duillier_admin_homepage') ?>">Retour</a>

<?php $view['slots']->stop() ?>
