<?php $view->extend('base.html.php') ?>
<?php $view['slots']->set('title', 'Rangeur') ?>
<?php $view['slots']->start('body') ?>


<?php
//connexion a la bdd
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

?>

  <form action="" method="post">
    <label for="">Jour de tir : </label>
    <select name="jour">    
      <?php
      $reponse = $bdd->query('SELECT * FROM jour');

      while ($donnees = $reponse->fetch()){
        //Conversion de la date en français
        $jour_semaine = array(1=>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi", 7=>"Dimanche");
        $nom_mois = array(1=>"Janvier", 2=>"Février", 3=>"Mars", 4=>"Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Aout", 9=>"Septembre", 10=>"Octobre", 11=>"Novembre", 12=>"Décembre");
        list($annee, $mois, $jour) = explode ("-", $donnees['date']);
        $timestamp = mktime(0,0,0, date($mois), date($jour), date($annee));
        $njour = date("N",$timestamp);
        $nmois = date("n",$timestamp);
        ?>
        <option value="<?php echo $donnees['date']; ?>" <?php if(isset($_POST['jour'])&&$_POST['jour'] == $donnees['date']) echo "selected='selected'"; ?>>
          <?php echo $jour_semaine[$njour]." ".$jour." ".$nom_mois[$nmois]." ".$annee; ?></option>
          <?php
        }
        ?>
      </select>
      <input type="submit" value="Go !" class="btn btn-success">
    </form>


    <?php
    $jour="2017-03-31";
    if(isset($_POST['jour'])){
      $jour=$_POST['jour'];
    }

    $reponse = $bdd->query('SELECT date, repas FROM jour WHERE date=\''.$jour.'\'');
    while ($donnees = $reponse->fetch()){
      //Conversion de la date en français
      $jour_semaine = array(1=>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi", 7=>"Dimanche");
      $nom_mois = array(1=>"Janvier", 2=>"Février", 3=>"Mars", 4=>"Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Aout", 9=>"Septembre", 10=>"Octobre", 11=>"Novembre", 12=>"Décembre");
      list($annee, $mois, $jourN) = explode ("-", $donnees['date']);
      $timestamp = mktime(0,0,0, date($mois), date($jourN), date($annee));
      $njour = date("N",$timestamp);
      $nmois = date("n",$timestamp);
      $repas = $donnees['repas'];
      //Affichage du titre
      echo '<h1 class="text-center">'.$jour_semaine[$njour]." ".$jourN." ".$nom_mois[$nmois]." ".$annee.'</h1>';
    }
    ?>
    <!--Affichage du tableau -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <?php
          //la ligne des postes
          $reponse = $bdd->query('SELECT idPoste FROM poste');
          while ($donnees = $reponse->fetch()){
            echo '<th>Poste '.$donnees['idPoste'].'</th>';
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        //la colonne des horaires
        $reponse = $bdd->query('SELECT * FROM Horaire WHERE date=\''.$jour.'\'');
        while ($donnees = $reponse->fetch()){
          echo '<tr>';
          echo '<th>'.$donnees['heure'].'</th>';
          //les boutons s'inscrire dans chaque colonne
          for($i=1;$i<=6;$i++){
            $query = $bdd->query('SELECT * FROM occupe WHERE idHoraire = '.$donnees['idHoraire'].' And idPoste ='.$i);
            $data = $query->fetch();
            //var_dump($data);
            if(empty($data)){
              ?>
              <td>
                <form action="<?php echo $view['router']->path('duillier_sign_in_formulaire'); ?>" method="post">
                  <input type="submit" class="btn btn-success" value="Inscrire"></input>
                  <input type="hidden" name="jour" value='<?php echo $jour ?>'>
                  <input type="hidden" name="poste" value='<?php echo $i ?>'>
                  <input type="hidden" name="heure" value='<?php echo $donnees['heure'] ?>'>
                  <input type="hidden" name="repas" value='<?php echo $repas ?>'>
                </form>
              </td>
              <?php
            }else{
              $idHoraire = $data['idHoraire'];
              $query = $bdd->query('select * from tireur t join participation p on t.idLicence = p.idLicence join occupe o on p.idLivret = o.numLivret where o.numLivret = '.$data['numLivret']);
              $data = $query->fetch();
              echo '<td>'.$data['nomTireur'].' '.$data['prenomTireur'];

              ?>
                <a href="<?php echo $view['router']->path('duillier_admin_formModifierRangeur', array(
                      'idPoste' => $data['idPoste'],
                      'date' => $data['date'],
                      'idHoraire' => $idHoraire,
                      'numLivret' => $data['numLivret'],
                      'repas' => $repas)
                      ) ?>" class="btn btn-primary" value="<?php echo $data['idHoraire'] ?>">Modifier</a>

                <a href="<?php echo $view['router']->path('duillier_admin_desinscrire', array(
                      'numLivret' => $data['numLivret'])
                      ) ?>" class="btn btn-danger" value="<?php echo $data['idHoraire'] ?>">Désinscrire</a>
              </td>
              <?php
            }

          }
          echo '</tr>';
        }

        ?>
      </tbody>
    </table>

<?php $view['slots']->stop() ?>
