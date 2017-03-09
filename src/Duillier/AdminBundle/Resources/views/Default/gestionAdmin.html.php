<?php
//connexion a la bdd
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

if(isset($_POST['supprimer'])){
  ?><div class="alert alert-success" role="alert">Suppression effectuée !</div><?php
  $reponse = $bdd->query('SELECT * FROM admin WHERE login=\'' . $_POST['login'] . '\'');
  $donnees = $reponse->fetch();
  if($_POST['login']==$donnees['login']){
    $bdd->exec('DELETE FROM Admin WHERE login=\'' . $_POST['login'] . '\'');
  }
}

include 'ajoutAdmin.html.php';


$reponse = $bdd->query('SELECT * FROM admin ');


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <h1 class="page-header text-center">Les administrateurs</h1>
    <div class="text-center">

    <a type="button" class="btn btn-success" href="ajouterAdmin">ajouter un admin</a>
    <a type="button" class="btn btn-warning" href="../app_dev.php">Retour</a>

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
    <td><?php echo $donnees['login']; ?> </td>
      <td><?php echo "<a href=\"supprimerAdmin?action=supprimer&login=".$donnees['login']."\"  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>"; ?></td>
    </tr>
    <?php
  }


  ?>




</table>

</body>
</html>
