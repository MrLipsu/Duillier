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
</head>


<body>

  <h1 class="page-header text-center ">Ajout du club</h1>

      <form class="form-horizontal" action="../gestionClub" method="post">
        <div class="form-group">
          <label for="idClub" class="col-sm-4 control-label">ID Club</label>
          <div class="col-sm-4"><!--on affiche à l'admin l'isbn du livre qu'il est en train de modifier-->
            <input type="text" class="form-control" value="" name="idClub">
          </div>
        </div>
        <div class="form-group">
          <label for="canton" class="col-sm-4 control-label">Canton</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="canton">
          </div>
        </div>
        <div class="form-group">
          <label for="nom" class="col-sm-4 control-label">Nom</label>
          <div class="col-sm-4"><!--puis le nouveau prix-->
            <input type="text" class="form-control" value="" name="nom">
          </div>
        </div>
        <div class="form-group">
          <label for="nomPresident" class="col-sm-4 control-label">Nom président</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="nomPresident">
          </div>
        </div>
        <div class="form-group">
          <label for="prenomPresident" class="col-sm-4 control-label">Prénom président</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="prenomPresident">
          </div>
        </div>
        <div class="form-group">
          <label for="adressePresident" class="col-sm-4 control-label">Adresse président</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="adressePresident">
          </div>
        </div>
        <div class="form-group">
          <label for="codePostal" class="col-sm-4 control-label">Code postal</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="codePostal">
          </div>
        </div>
        <div class="form-group">
          <label for="ville" class="col-sm-4 control-label">Ville</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="ville">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-4 control-label">E-mail</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="numCCP" class="col-sm-4 control-label">Numéro CCP</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="numCCP">
          </div>
        </div>
        <div class="form-group">
          <label for="libelleCCP" class="col-sm-4 control-label">Libellé CCP</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="libelleCCP">
          </div>
        </div>
        <div class="form-group">
          <label for="iban" class="col-sm-4 control-label">IBAN</label>
          <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
            <input type="text" class="form-control" value="" name="iban">
          </div>
        </div>

        <!--Une fois qu'il a entré les nouvelles caractéristiques du livre l'admin enregistre, -->
        <!--Une fois que l'utilisteur à enregister une vérification aura lieu grâce à au fichier verificationModification.php en passant par controller.php-->
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" class="btn btn-success" value="Ajouter"></input>
            <a href="../gestionClub" class="btn btn-warning">Annuler</a>
            <!--Il aura néanmoins toujours la possibilité d'annuler cette actions dans ce cas là il sera rediriger sur la page controller.php-->
          </div>
        </div>
        <input type="hidden" name="enregistrerAjout" value="">
      </form>

</body>
</html>
