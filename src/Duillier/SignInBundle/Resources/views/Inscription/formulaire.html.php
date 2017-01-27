<?php
  $bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <!-- Le lien au fichier style.css ne marche pas -->
  <link rel="stylesheet" href="../../css/SignInBundle/style.css">
  <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <script src="../../jQuery/jQuery.js"></script>
  <script src="../../jQuery/SignInBundle/Inscription.js"></script>

</head>
<body>
  <section>

    <div class="col-sm-5 divFormulaire ">
      <h1 class="page-header text-center">Formulaire d'inscription</h1>

      <form class="form-horizontal" action="../planning" method="post">

      <fieldset class="coordonnees">
        <legend>Vos coordonnées</legend>
        <div class="form-group">
          <label  class="col-sm-4 control-label"for="nom">Nom</label>
          <div class="col-sm-5">
            <input type="text" name="nom" class=" form-control " value="" required>
          </div>
        </div>

        <div class="form-group">
          <label   class="col-sm-4 control-label" for="prenom">Prénom</label>
          <div class="col-sm-5">
            <input type="text" name="prenom"  class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="idLicence">Numéro de licence</label>
          <div class="col-sm-5">
            <input type="text" name="idLicence"  class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="adresse">Adresse</label>
          <div class="col-sm-5">
            <input type="text" name="prenom"  class="form-control" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-4 control-label" for="ville">Ville</label>
          <div class="col-sm-5">
            <input type="text" name="ville"  class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="codePostal">Code postal</label>
          <div class="col-sm-5">
            <input type="text" name="codePostal"  class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="email">E-mail</label>
          <div class="col-sm-5">
            <input type="text" name="email"  class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="anneeNaissance">Année de naissance</label>
          <div class="col-sm-5">
            <input type="text" name="anneeNaissance"  class="form-control" value="" required>
          </div>
        </div>
      </fieldset>

      <fieldset class="tir">
        <legend>Votre tir</legend>
        <div class="form-group">
          <label class="col-sm-4 control-label" for="estGaucher">Gaucher </label>
          <div class="col-sm-5">
            <input type="radio" name="estGaucher" id="estGaucher" value="1"> Oui
            <input type="radio" name="estGaucher" id="estGaucher" value="0" checked> Non
          </div>
        </div>

        <!-- Les tirs -->

        <div class="form-group">
          <label class="col-sm-4 control-label" for="doleGroupe">Dôle groupe </label>
          <div class="col-sm-5">
            <input type="radio" name="doleGroupe" id="doleGroupe" value="1" checked> Oui
            <input type="radio" name="doleGroupe" id="doleGroupe" value="0"> Non
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-4 control-label" for="duillier">Duillier </label>
          <div class="col-sm-5">
            <input type="radio" name="duillier" id="duillier" value="1" checked> Oui
            <input type="radio" name="duillier" id="duillier" value="0"> Non
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-4 control-label" for="montBlanc">Mont-blanc </label>
          <div class="col-sm-5">
            <input type="radio" name="montBlanc" id="montBlanc" value="1" checked> Oui
            <input type="radio" name="montBlanc" id="montBlanc" value="0"> Non
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-4 control-label" for="perceNeige">Perce-neige </label>
          <div class="col-sm-5">
            <input type="radio" name="perceNeige" id="perceNeige" value="1" checked> Oui
            <input type="radio" name="perceNeige" id="perceNeige" value="0"> Non
          </div>
        </div>


        <div class="form-group">
          <label  class="col-sm-4 control-label" for="club">Club</label>
          <div class="col-sm-5">
            <select name="listeClub">  
              <option value="">Pas de club choisi</option>  
              <?php
              $reponse = $bdd->query('SELECT * FROM club');
              while ($donnees = $reponse->fetch()){
                ?>
                <option value="<?php echo $donnees['idClub']; ?>"><?php echo $donnees['nom'] ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label  class="col-sm-4 control-label" for="groupe">Groupe</label>
          <div class="col-sm-5">
            <select class="" name="listeGroupe">
              <option value="pasDeGroupe">Pas de groupe choisi</option>
              <?php
              $reponse = $bdd->query('SELECT * FROM Groupe WHERE idClub=\'. recuperer le idClub de la liste déroulante en dessus.\'');
              while ($donnees = $reponse->fetch()){
                ?>
                <option value="<?php echo $donnees['nomGroupe']; ?>"><?php echo $donnees['nomGroupe'] ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="nbEssai">Nombre d'essai</label>
          <div class="col-sm-5">
            <input type="number" step="1" value="0" min="0" max="5" for="nbEssai">
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="repas">Nombre de repas</label>
          <div class="col-sm-5">
            <input type="number" step="1" value="0" min="0" max="9" for="repas">
          </div>
        </div>
      </fieldset>

      <fieldset class="recap">
        <legend>Récapitulons</legend>

        <div class="form-group">
          <label for="jour" class="col-sm-4 control-label">Jour de tir</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo $_POST['jour']; ?></p>
          </div>
        </div>

        <div class="form-group">
          <label for="debut" class="col-sm-4 control-label">Heure de début</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo $_POST['heure']; ?></p>
          </div>
        </div>


        <div class="form-group">
          <label for="poste" class="col-sm-4 control-label">Votre poste</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo $_POST['poste']; ?></p>
          </div>
        </div>


        <div class="form-group">
          <label for="prix" class="col-sm-4 control-label">Prix</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo "40 CHF"; ?></p>
          </div>
        </div>

        <div class="form-group">
          <label for="rangeur" class="col-sm-4 control-label">Nombre de rangeurs</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo "3"; ?></p>
          </div>
        </div>

        <div class="form-group">
          <label for="coups" class="col-sm-4 control-label">Nombre de coups</label>
          <div class="col-sm-4">
            <p class="form-control-static"><?php echo "35"; ?></p>
          </div>
        </div>

        <div class="form-group">
          <label  class="col-sm-4 control-label" for="commentaire">Commentaire</label>
          <div class="col-sm-5">
            <textarea name="commentaire" rows="8" cols="80" class="form-control"></textarea>
          </div>
        </div>
      </fieldset>

        <div class="col-sm-offset-4">
          <input type="submit" name="valider" class="btn btn-success btn-s" value="Valider">
          <a href="../planning" class="btn btn-warning">Annuler</a>
        </div>



      </div>

    </form>

  </div>
</section>
</body>
</html>
