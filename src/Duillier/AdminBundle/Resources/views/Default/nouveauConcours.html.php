<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');
?>

    <h1 class="page-header text-center ">Création de la prochaine édition</h1>


  <form class="" action="<?php echo $view['router']->path('duillier_planning_homepage') ?>" method="post">

    <!--<label for="annee">Année</label>
    <select name="annee">
      <option value="">Pas d'année choisie</option>
      <?php
        for($i=date('Y'); $i<date('Y')+3; $i++){
          ?>
            <option value=<?php $i ?>><?php echo $i ?></option>
          <?php
        }
       ?>
    </select>

<br> -->

  <label for="jour">Nombre de dates</label>
  <select name="nbJour" id="nbJour">
    <?php
      for($i=0; $i<=10; $i++){
        ?>
          <option name="nbJour" value=<?php echo $i ?>><?php echo $i ?></option>
        <?php
      }
     ?>
  </select>


<div id="jour">

</div>
<br>
  <div>
    <input type="submit" name="validerNewConcours" class="btn btn-success btn-s" value="Valider">
    <a href="<?php echo $view['router']->path('duillier_admin_homepage') ?>" class="btn btn-warning">Annuler</a>
  </div>

</form>
<?php $view['slots']->stop() ?>
