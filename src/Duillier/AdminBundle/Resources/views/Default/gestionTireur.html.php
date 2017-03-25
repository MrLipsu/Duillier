<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
  include "db/db.php";

?>

<h1 class="page-header text-center ">Gestion des tireurs par club</h1>

<form action="" method="post">
  <label for="club">Nom du club</label>
  <select id="club" name="club">  
    <option value="">Pas de club choisi</option>  
    <?php
    $reponse = $bdd->query('SELECT * FROM club ORDER BY nom');
    while ($donnees = $reponse->fetch()){
      ?>
        <option value="<?php echo $donnees['idClub']; ?>" <?php if(isset($_POST['club'])&&$_POST['club'] == $donnees['idClub']) echo "selected='selected'"; ?>><?php echo $donnees['nom'] ?></option>
      <?php
    }
    ?>
  </select>
  <input type="submit" value="Go !" class="btn btn-success btn-xs">
</form>


<?php
if(isset($_POST['club'])){
  $reponse = $bdd->query('SELECT idClub, nom
                          FROM club c
                          WHERE idClub=\''.$_POST['club'].'\'');

    while ($donnees = $reponse->fetch()){
      echo "<h3>".$donnees['nom']."</h3>";
    }

    $reponse = $bdd->query('SELECT c.idClub, c.nom, t.nomTireur, t.prenomTireur
                            FROM club c
                            JOIN tireur t ON t.idClub=c.idClub
                            WHERE c.idClub=\''.$_POST['club'].'\'
                            ORDER BY t.nomTireur');

      while ($donnees = $reponse->fetch()){
        echo "<ul>";
        echo "<li>".$donnees['nomTireur']." ".$donnees['prenomTireur']."</li>";
        echo "</ul>";
      }

    }
    ?>
    <a type="button" class="btn btn-warning" href="<?php echo $view['router']->path('duillier_admin_homepage') ?>">Retour</a>

    <?php $view['slots']->stop() ?>
