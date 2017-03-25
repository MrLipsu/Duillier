<?php $view->extend('base.html.php') ?>
<script src="<?php echo $view['assets']->getUrl('jQuery/SignInBundle/Inscription.js') ?>"></script>
<?php $view['slots']->set('title', 'Inscription') ?>

<?php $view['slots']->start('body') ?>
<link href="<?php echo $view['assets']->getUrl('css/SignInBundle/style.css') ?>" rel="stylesheet" />
<script src="<?php echo $view['assets']->getUrl('jQuery/SignInBundle/Inscription.js') ?>"></script>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');
?>

<h1 class="page-header text-center ">Gestion des groupes</h1>

<h3><?php echo $club->getNom(); ?></h3>
<?php
$reponse = $bdd->query('SELECT *
                        FROM tireur t
                        JOIN club c ON c.idClub=t.idClub
                        JOIN participation p ON p.idLicence=t.idLicence
                        WHERE c.nom=\''. $club->getNom() .'\'');

echo "<h4>Tireurs désirant être dans un groupe</h4>";
echo "<ul>";
  while ($donnees = $reponse->fetch()){
    if($donnees['isInGroupe']==1){
      echo "<li>".$donnees['nomTireur']." ".$donnees['prenomTireur']. " -- Numéro de licence : ".$donnees['idLicence']."</li>";
    }
  }
echo "</ul>";


  $reponse = $bdd->query('SELECT *
                          FROM tireur t
                          JOIN club c ON c.idClub=t.idClub
                          JOIN participation p ON p.idLicence=t.idLicence
                          WHERE c.nom=\''. $club->getNom() .'\'');


  echo "<h4>Tireurs ne désirant pas être dans un groupe</h4>";
  echo "<ul>";
  while ($donnees = $reponse->fetch()){
    if($donnees['isInGroupe']==0){
      echo "<li>".$donnees['nomTireur']." ".$donnees['prenomTireur']. " -- Numéro de licence : ".$donnees['idLicence']."</li>";
    }
  }
  echo "</ul>";


  $reponse=$bdd->query('SELECT count(*) as nbTireurGroupe
                        FROM tireur t
                        JOIN club c ON c.idClub=t.idClub
                        JOIN participation p ON p.idLicence=t.idLicence
                        WHERE c.nom=\''. $club->getNom() .'\' AND p.isInGroupe=1');

  $donnees = $reponse->fetch();
  $nbGroupe = (int)$donnees['nbTireurGroupe']/5;
?>



  <form class="form-horizontal" method="post"  action="<?php echo $view['router']->path('duillier_planning_homepage') ?>">
<?php
  for($i=1; $i<=$nbGroupe; $i++){
    ?>
    <h3 class="text-center">Groupe <?php  echo $i ?></h3>
    <div class="form-group">
      <label  class="col-sm-4 control-label" for="tireur1">Tireur 1 : </label>
      <div class="col-sm-3">
        <input type="text" id="groupe<?php echo $i ?>" name="tireur1" class="form-control" placeholder="Numéro de licence" required>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-4 control-label" for="tireur2">Tireur 2 : </label>
      <div class="col-sm-3">
        <input type="text" id="groupe<?php echo $i ?>" name="tireur2" class="form-control" placeholder="Numéro de licence" required>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-4 control-label" for="tireur3">Tireur 3 : </label>
      <div class="col-sm-3">
        <input type="text" id="groupe<?php echo $i ?>" name="tireur3" class="form-control" placeholder="Numéro de licence" required>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-4 control-label" for="tireur4">Tireur 4 : </label>
      <div class="col-sm-3">
        <input type="text" id="groupe<?php echo $i ?>" name="tireur4" class="form-control" placeholder="Numéro de licence" required>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-4 control-label" for="tireur5">Tireur 5 : </label>
      <div class="col-sm-3">
        <input type="text" id="groupe<?php echo $i ?>" name="tireur5" class="form-control" placeholder="Numéro de licence" required>
      </div>
    </div>

    <?php
  }
?>
<div class="col-sm-6">
  <input type="submit" name="validerGestionGroupe" class="btn btn-success btn-s" value="Valider">
  <input type="hidden" name="nbGroupe" class="btn btn-success btn-s" value="<?php echo $i-1 ?>">
  <a href="<?php echo $view['router']->path('duillier_planning_homepage') ?>" class="btn btn-warning">Annuler</a>
</div>

</form>

<?php $view['slots']->stop() ?>
