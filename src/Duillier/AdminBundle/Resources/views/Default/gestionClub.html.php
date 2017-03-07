<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');


  if(isset($_POST['enregistrerModif'])){
    $reponse1 = $bdd->query('SELECT * FROM Club WHERE idClub=\'' . $_POST['idClub'] . '\'');
    $donnees1 = $reponse1->fetch();
    if($_POST['idClub']==$donnees1['idClub']){
      $bdd->exec('UPDATE Club SET canton=\''.$_POST['canton'].'\', nom=\''.$_POST['nom'].'\', nomPresident=\''.$_POST['nomPresident'].'\',
      prenomPresident=\''.$_POST['prenomPresident'].'\', adressePresident=\''.$_POST['adressePresident'].'\', codePostal=\''.$_POST['codePostal'].'\',  ville=\''.$_POST['ville'].'\',
      email=\''.$_POST['email'].'\', numCCP=\''.$_POST['numCCP'].'\', libelleCCP=\''.$_POST['libelleCCP'].'\', iban=\''.$_POST['iban'].'\'
      WHERE idClub=\'' . $_POST['idClub'] . '\'');
    }
  }

  if(isset($_POST['enregistrerSupprimer'])){
    $reponse1 = $bdd->query('SELECT * FROM Club WHERE idClub=\'' . $_POST['idClub'] . '\'');
    $donnees1 = $reponse1->fetch();
    if($_POST['idClub']==$donnees1['idClub']){
      $bdd->exec('DELETE FROM Club WHERE idClub=\'' . $_POST['idClub'] . '\'');
    }
  }

  if(isset($_POST['enregistrerAjout'])){
      $bdd->exec('INSERT INTO Club(idClub, canton, nom, nomPresident, prenomPresident, adressePresident, codePostal, ville, email, numCCP, libelleCCP, iban)
      VALUES(\''.$_POST['idClub'].'\', \''.$_POST['canton'].'\', \''.$_POST['nom'].'\', \''.$_POST['nomPresident'].'\', \''.$_POST['prenomPresident'].'\',
      \''.$_POST['adressePresident'].'\', \''.$_POST['codePostal'].'\', \''.$_POST['ville'].'\', \''.$_POST['email'].'\', \''.$_POST['numCCP'].'\',
      \''.$_POST['libelleCCP'].'\', \''.$_POST['iban'].'\')');
  }

  $reponse = $bdd->query('SELECT * FROM Club');


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nouveau concours</title>

  <link href="<?php echo $view['assets']->getUrl('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?php echo $view['assets']->getUrl('css/SignInBundle/style.css') ?>" rel="stylesheet" />
</head>


<body>

  <h1 class="page-header text-center ">Gestion des clubs</h1>

  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <a href="gestionClub/ajouter" class="btn btn-success">Ajouter un club</a>
      <a href="../app_dev.php/" class="btn btn-warning">Retour</a>
    </div>
  </div>

  <table class="table table-striped table-bordered">
        <tr> <!--déclaration des noms des colonnes-->
          <th>Numéro</th>
          <th>Canton</th>
          <th>Nom</th>
          <th>Nom du président</th>
          <th>Prénom du président</th>
          <th>Adresse du président</th>
          <th>Code postal</th>
          <th>Ville</th>
          <th>Email</th>
          <th>Numéro CCP</th>
          <th>Libellé CCP</th>
          <th>IBAN</th>
          <th></th>
          <th></th>
        </tr>
        <?php
        while ($donnees = $reponse->fetch()){
          ?>
          <!--tant qu'il y a des livres à afficher on affiche des caractéristiques en recuperant les valeurs dans la
          base de données grâce à $donnees-->
          <tr>
            <td><?php echo $donnees['idClub']; ?></td>
            <td><?php echo $donnees['canton']; ?></td>
            <td><?php echo $donnees['nom']; ?></td>
            <td><?php echo $donnees['nomPresident']; ?></td>
            <td><?php echo $donnees['prenomPresident']; ?></td>
            <td><?php echo $donnees['adressePresident']; ?></td>
            <td><?php echo $donnees['codePostal']; ?></td>
            <td><?php echo $donnees['ville']; ?></td>
            <td><?php echo $donnees['email']; ?></td>
            <td><?php echo $donnees['numCCP']; ?></td>
            <td><?php echo $donnees['libelleCCP']; ?></td>
            <td><?php echo $donnees['iban']; ?></td>
            <td><?php echo "<a href=\"gestionClub/modifier?action=modifier&idClub=".$donnees['idClub']."\" </a><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>"; ?></td>
            <td><?php echo "<a href=\"gestionClub/supprimer?action=supprimer&idClub=".$donnees['idClub']."\" </a><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>"; ?></td>
          </tr>
          <?php
        }
        ?>
      </table>

</body>
</html>
