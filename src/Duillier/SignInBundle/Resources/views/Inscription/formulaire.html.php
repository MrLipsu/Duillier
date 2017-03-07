<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');
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

    <div class="col-sm-12 divFormulaire " >
      <h1 class="page-header text-center ">Formulaire d'inscription</h1>
    </div>

    <form class="form-horizontal formSignInBundle" action="../planning" method="post" onsubmit="return verifForm(this)">

      <div class="col-sm-5 divFormulaire " >
        <div class="startPage">
          <fieldset class="coordonnees">
            <legend>Vos coordonnées</legend>
            <div class="form-group">
              <label  class="col-sm-4 control-label"for="nom">Nom</label>

              <div class="col-sm-7">
                <input type="text" id="nom" name="nom" class=" form-control " onblur="verifNom(this)" value="" required>
              </div>
            </div>

            <div class="form-group">
              <label   class="col-sm-4 control-label" for="prenom">Prénom</label>
              <div class="col-sm-7">
                <input type="text" id="prenom" name="prenom"  class="form-control" value="" onblur="verifNom(this)" required>
              </div>
              <input type="button" id="buttonVisible" name="buttonVisible" class="btn btn-success btn-s" value="Valider">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="idLicence">Numéro de licence</label>
            <div class="col-sm-7">
              <input type="text" id="idLicence" name="idLicence"  class="form-control" onblur="verifLicence(this)" value="" required>
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="adresse">Adresse</label>
            <div class="col-sm-7">
              <input type="text" id='adresse' name="adresse"  class="form-control" value="" onblur="verifAdresse(this)" required>
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="ville">Ville</label>
            <div class="col-sm-7">
              <input type="text" id='ville' name="ville"  class="form-control" value="" onblur="verifVille(this)" required>

            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="codePostal">Code postal</label>

            <div class="col-sm-7">
              <input type="text" id='codePostal' name="codePostal"  class="form-control" value="" onblur="verifCP(this)" required>

            </div>
          </div>


          <div class="form-group">
            <label  class="col-sm-4 control-label" for="email">E-mail</label>
            <div class="col-sm-7">
              <input type="text" id='email' name="email"  class="form-control" value="" onblur="verifMail(this)" required>

            </div>
          </div>

          <div class="form-group">

            <label  class="col-sm-4 control-label" for="anneeNaissance">Date de naissance complète</label>
            <div class="col-sm-7">
              <input type="text" id='anneeNaissance' name="anneeNaissance"  class="form-control" value="" placeholder="JJ/MM/AAAA" onblur="verifNaissance(this)"required>

            </div>
          </div>
        </fieldset>
      </div>

      <div class="col-sm-7 divFormulaire">
        <fieldset class="tir">
          <legend>Votre tir</legend>
          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="estGaucher">Gaucher </label>
              <input type="radio" name="estGaucher" id="estGaucher" value="1"> Oui
              <input type="radio" name="estGaucher" id="estGaucher" value="0" checked> Non
          </div>

          <!-- Les tirs -->

          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="doleGroupe">Dôle groupe </label>
            <div>
              <input type="radio" name="doleGroupe" id="doleGroupe" value="1" checked> Oui
              <input type="radio" name="doleGroupe" id="doleGroupe" value="0"> Non
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="duillier">Duillier </label>
            <div>
              <input type="radio" name="duillier" id="duillier" value="1" checked> Oui
              <input type="radio" name="duillier" id="duillier" value="0"> Non
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="montBlanc">Mont-blanc </label>
            <div>
              <input type="radio" name="montBlanc" id="montBlanc" value="1" checked> Oui
              <input type="radio" name="montBlanc" id="montBlanc" value="0"> Non
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="perceNeige">Perce-neige </label>
            <div>
              <input type="radio" name="perceNeige" id="perceNeige" value="1" checked> Oui
              <input type="radio" name="perceNeige" id="perceNeige" value="0"> Non
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 col-md-offset-1 control-label" for="nbEssai">Nombre de passes d'essais (Passe de 5 coups)</label>
            <div class="col-sm-5">
              <input type="number" step="1" value="0" min="0" max="5" id="numberNbEssai" name="numberNbEssai">
            </div>
          </div>


          <div class="form-group">
            <label  class="col-md-2 col-md-offset-1 control-label" for="club">Club</label>
            <div>
              <select name="club">  
                <option value="">Pas de club choisi</option>  
                <?php
                $reponse = $bdd->query('SELECT * FROM club');
                while ($donnees = $reponse->fetch()){
                  ?>
                  <option value="<?php echo $donnees['idClub']; ?>" name="club"><?php echo $donnees['nom'] ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 col-md-offset-1 control-label" for="groupe">Souhaitez-vous tirer dans un groupe ? </label>
            <div>
              <input type="radio" name="groupe" id="groupe" value="1" checked> Oui
              <input type="radio" name="groupe" id="groupe" value="0"> Non
            </div>
          </div>


          <div class="form-group">

            <label  class="col-sm-2 col-md-offset-1 control-label" for="repas">Nombre de repas</label>
            <div class="col-sm-5">
              <input type="number" step="1" value="0" min="0" max="9" id="numberNbRepas" name="numberNbRepas">
            </div>
          </div>
        </fieldset>
      </div>

      <div class="col-sm-12 divFormulaire">

        <fieldset class="recap">
          <legend>Récapitulons</legend>

          <div class="form-group">
            <label for="jour" class="col-sm-4 control-label">Jour de tir</label>
            <div class="col-sm-3">
              <input type="text" value=<?php echo $_POST['jour']; ?> name="jour" readonly="readonly">
            </div>
          </div>

          <div class="form-group">
            <label for="poste" class="col-sm-4 control-label">Votre poste</label>
            <div class="col-sm-4">
              <!--  <p class="form-control-static"><?php //echo $_POST['poste']; ?></p> -->
              <input type="text" value=<?php echo $_POST['poste']; ?> name="poste" readonly="readonly">
            </div>
          </div>

          <div class="form-group">
            <label for="debut" class="col-sm-4 control-label">Heure de début</label>
            <div class="col-sm-3">
              <input type="text" value=<?php echo $_POST['heure']; ?> name="heure" readonly="readonly">
            </div>
          </div>


          <div class="form-group">
            <label for="rangeur" class="col-sm-4 control-label">Nombre de rangeurs</label>
            <div class="col-sm-4">
              <input type="text" value="3" name="rangeur" readonly="readonly">
            </div>
          </div>


          <div class="form-group">
            <label for="prix" class="col-sm-4 control-label">Prix</label>
            <div class="col-sm-3">
              <input type="text" value="40" name="prix" readonly="readonly">
            </div>
          </div>



          <div class="form-group">
            <label for="coups" class="col-sm-4 control-label">Nombre de coups</label>
            <div class="col-sm-4">
              <input type="text" value="35" name="nbCoups" readonly="readonly">
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label  class="col-sm-1 control-label" for="commentaire">Commentaire</label>
              <div class="col-sm-5">
                <textarea name="commentaire" rows="8" cols="80" class="form-control"></textarea>
              </div>
            </div>
          </fieldset>

          <div class="col-sm-6">
            <input type="submit" name="valider" class="btn btn-success btn-s" value="Valider">
            <input type="hidden" name="valider">
            <a href="../planning" class="btn btn-warning">Annuler</a>
          </div>

        </div>

      </div>

    </form>

  </div>
</section>
</body>
</html>
