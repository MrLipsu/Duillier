<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');
?>

    <h1 class="page-header text-center ">Création d'un nouveau concours</h1>


  <form class="" action="#" method="post">

    <label for="annee">Année</label>
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

<br>




  <label for="jour">Nombre de jours de tir</label>
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
  <br>
  <label class="" for="jour">Jour de tir 1</label>
  <input type="date" name="jour">
  <label for="de">De </label>
  <select name="heureDebut">
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
  </select>
  <label for="hDebut"> h </label>
  <select name="minuteDebut">
    <option value="0">0</option>
    <option value="15">15</option>
    <option value="30">30</option>
    <option value="45">45</option>
  </select>
  <label for="a"> à </label>
  <select name="heureFin">
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
  </select>
  <label for="hFin"> h </label>
  <select name="minuteFin">
    <option value="0">0</option>
    <option value="15">15</option>
    <option value="30">30</option>
    <option value="45">45</option>
  </select>
</div>

  <div>
    <input type="submit" name="valider" class="btn btn-success btn-s" value="Valider">
    <input type="hidden" name="newConcours">
    <a href="#" class="btn btn-warning">Annuler</a>
  </div>

</form>
<?php $view['slots']->stop() ?>
