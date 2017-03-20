<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Modifier l\'inscription') ?>

<?php $view['slots']->start('body') ?>
<script src="<?php echo $view['assets']->getUrl('jQuery/adminBundle/modifierRangeur.js') ?>"></script>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');
$reponse = $bdd->query("SELECT *
                        FROM tireur t
                        join participation p on t.idLicence=p.idLicence
                        where p.idLivret = '$numLivret'");

$donnees = $reponse->fetch();
?>

  <section>

    <div class="col-sm-12 divFormulaire " >
      <h1 class="page-header text-center ">Formulaire de Modification</h1>
    </div>

    <form class="form-horizontal formSignInBundle" action="../gestionRangeur" method="post" onSubmit="return verifForm(this)">

      <div class="col-sm-5 divFormulaire ">
        <div class="startPage">
          <fieldset class="coordonnees">
            <legend>Vos coordonnées</legend>
            <div class="form-group">
              <label  class="col-sm-4 control-label"for="nom">Nom</label>

              <div class="col-sm-7">
                <input type="text" id="nom" name="nom" class=" form-control " onblur="verifNom(this)" value="<?php echo $donnees['nomTireur']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label   class="col-sm-4 control-label" for="prenom">Prénom</label>
              <div class="col-sm-7">
                <input type="text" id="prenom" name="prenom"  class="form-control" value=<?php echo $donnees['prenomTireur']; ?> onblur="verifNom(this)" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="idLicence">Numéro de licence</label>
            <div class="col-sm-7">
              <input type="text" id="idLicence" name="idLicence"  class="form-control" onblur="verifLicence(this)" value="<?php echo $donnees['idLicence']; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="adresse">Adresse</label>
            <div class="col-sm-7">
              <input type="text" id='adresse' name="adresse"  class="form-control" value="<?php echo $donnees['adresse']; ?>" onblur="verifAdresse(this)" required>
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="ville">Ville</label>
            <div class="col-sm-7">
              <input type="text" id='ville' name="ville"  class="form-control" value="<?php echo $donnees['ville']; ?>" onblur="verifVille(this)" required>

            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-4 control-label" for="codePostal">Code postal</label>

            <div class="col-sm-7">
              <input type="text" id='codePostal' name="codePostal"  class="form-control" value="<?php echo $donnees['codePostalTireur']; ?>" onblur="verifCP(this)" required>

            </div>
          </div>


          <div class="form-group">
            <label  class="col-sm-4 control-label" for="email">E-mail</label>
            <div class="col-sm-7">
              <input type="text" id='email' name="email"  class="form-control" value="<?php echo $donnees['mail']; ?>" onblur="verifMail(this)" required>
            </div>
          </div>

          <div class="form-group">

            <label  class="col-sm-4 control-label" for="anneeNaissance">Date de naissance complète</label>

            <div class="col-sm-7">
              <input type="text" id='anneeNaissance' name="anneeNaissance"  class="form-control" value="<?php echo $donnees['anneeNaissance']; ?>" placeholder="JJ/MM/AAAA" onblur="verifNaissance(this)"required>
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
          <div class="form-group" id="divTirs">
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
          </div>

          <div class="form-group">
            <label  class="col-sm-2 col-md-offset-1 control-label" for="nbEssai">Nombre de passes d'essais (Passe de 5 coups)</label>
            <div class="col-sm-5">
              <input type="number" step="1" value="0" min="0" max="5" id="nbEssais" name="numberNbEssai">
            </div>

          </div>


          <div class="form-group">
            <label  class="col-md-2 col-md-offset-1 control-label" for="club">Club</label>
            <div>
              <select id="club" name="club">  
                <option value="">Pas de club choisi</option>  
                <?php
                $reponse = $bdd->query('SELECT * FROM club');
                while ($donnees = $reponse->fetch()){
                  ?>
                  <option value="<?php echo $donnees['idClub']; ?>" name="clubOption"><?php echo $donnees['nom'] ?></option>
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
            <input type="hidden" value=<?php echo $repas ?> name="booleanRepas" id="booleanRepas"readonly="readonly">
            <label  class="col-sm-2 col-md-offset-1 control-label" for="nbRepas">Nombre de repas</label>
            <div class="col-sm-5" id="divNbDeRepas">
              <input type="number" step="1" value="0" min="0" max="9" id="nbRepas" name="numberNbRepas">
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
              <input type="text" value=<?php echo $date; ?> name="jour" >
            </div>
          </div>

          <div class="form-group">
            <label for="poste" class="col-sm-4 control-label">Votre poste</label>
            <div class="col-sm-4">
              <input type="text" value=<?php echo $idPoste; ?> name="poste"  id="poste" value="<?php echo $idPoste?>">
            </div>
          </div>

          <?php
          $reponse = $bdd->query("SELECT heure
                                  FROM horaire
                                  where idHoraire = '$idHoraire'");

          $donnees = $reponse->fetch();
           ?>
          <div class="form-group">
            <label for="debut" class="col-sm-4 control-label">Heure de début</label>
            <div class="col-sm-3">
              <input type="text" value=<?php echo $donnees['heure']; ?> name="heure" >
            </div>
          </div>

          <div class="form-group">
            <label for="coups" class="col-sm-4 control-label">Nombre de coups</label>
            <div class="col-sm-4">
              <input type="text" id="recapNombreDecoups" value="35" name="nbCoups" readonly="readonly">
            </div>
          </div>

          <div class="form-group">
            <label for="rangeur" class="col-sm-4 control-label">Nombre de rangeurs</label>
            <div class="col-sm-4">
              <input type="text" value="3" name="rangeur" readonly="readonly" id="nombreDeRangeurs">
            </div>
          </div>


          <div class="form-group">
            <label for="prix" class="col-sm-4 control-label">Prix</label>
            <div class="col-sm-3">
              <input type="text" value="40" name="prix" readonly="readonly" id="prix" value="6">
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
            <a href="<?php echo $view['router']->path('duillier_planning_homepage') ?>" class="btn btn-warning">Annuler</a>

          </div>

        </div>

      </div>

    </form>

  </div>
</section>

<?php $view['slots']->stop() ?>
