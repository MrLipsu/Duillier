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
  <script src="<?php echo $view['assets']->getUrl('jQuery/jQuery.js') ?>"></script>
  <script src="<?php echo $view['assets']->getUrl('jQuery/AdminBundle/nouveauConcours.js') ?>"></script>


</head>

<body>
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


  <!-- 
  <br>
  <label class="" for="jour">Jour de tir 1</label>
  <input type="date" name="jour">
  <label for="de">De </label>
  <select name="heureDebut">
    <?php/*
      for($i=8; $i<=17; $i++){
        ?>
          <option value=<?php $i ?>><?php echo $i ?></option>
        <?php
      }
     ?>
  </select>
  <label for="hDebut"> h </label>
  <select name="minuteDebut">
    <?php
      for($i=0; $i<60; $i+=15){
        ?>
          <option value=<?php $i ?>><?php echo $i ?></option>
        <?php
      }
     ?>
  </select>
  <label for="a"> à </label>
  <select name="heureFin">
    <?php
    for($i=8; $i<=17; $i++){
        ?>
          <option value=<?php $i ?>><?php echo $i ?></option>
        <?php
      }
     ?>
  </select>
  <label for="hFin"> h </label>
  <select name="minuteFin">
    <?php
    for($i=0; $i<60; $i+=15){
        ?>
          <option value=<?php $i ?>><?php echo $i ?></option>
        <?php
      }
     ?>
  </select>
*/ ?>
-->


  <div>
    <input type="submit" name="valider" class="btn btn-success btn-s" value="Valider">
    <input type="hidden" name="newConcours">
    <a href="#" class="btn btn-warning">Annuler</a>
  </div>

</form>

</body>
</html>
