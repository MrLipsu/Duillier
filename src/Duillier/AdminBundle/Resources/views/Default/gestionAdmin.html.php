<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
  include "db/db.php";


if(isset($_POST['supprimer'])){
  ?><div class="alert alert-success" role="alert">Suppression effectuée !</div><?php
  $reponse = $bdd->query('SELECT * FROM user WHERE username=\'' . $_POST['login'] . '\'');
  $donnees = $reponse->fetch();
  if($_POST['login']==$donnees['username']){
    $bdd->exec('DELETE FROM user WHERE username=\'' . $_POST['login'] . '\'');
  }
}

include 'ajoutAdmin.html.php';


$reponse = $bdd->query('SELECT * FROM user where roles = \'a:1:{i:0;s:10:"ROLE_ADMIN";}\'');


?>


    <h1 class="page-header text-center">Les administrateurs</h1>
    <div class="text-center">

    <a type="button" class="btn btn-success" href="<?php echo $view['router']->path('duillier_admin_ajouterAdmin') ?>">Ajouter un admin</a>
    <a type="button" class="btn btn-warning" href="<?php echo $view['router']->path('duillier_admin_homepage') ?>">Retour</a>

      <div>

      <!-- Pour une raison d'esthétique nous avons décidé d'afficher les livres dans un tableau -->
      <table class="table table-striped table-bordered">
        <tr> <!--déclaration des noms des colonnes-->
          <th>Administateur</th>
          <th></th>
        </tr>
        <?php

  while ($donnees = $reponse->fetch()){
    ?>
    <tr>
    <td><?php echo $donnees['username']; ?> </td>
      <td><?php echo "<a href=\"supprimerAdmin?action=supprimer&login=".$donnees['username']."\"  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>"; ?></td>
    </tr>
    <?php
  }


  ?>




</table>
<?php $view['slots']->stop() ?>
