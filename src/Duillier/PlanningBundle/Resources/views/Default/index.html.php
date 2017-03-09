<?php
//connexion a la bdd
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

//insert du tireur
  if(isset($_POST['valider'])){


    $bdd->exec('INSERT INTO Participation(idLicence, nbEssai, nbRepas, montantTotal) VALUES(\''.$_POST['idLicence'].'\', \''.$_POST['numberNbEssai'].'\', \''.$_POST['numberNbRepas'].'\', \''.$_POST['prix'].'\')');

    $reponse = $bdd->query('SELECT idLivret FROM Participation WHERE idLicence=\'' . $_POST['idLicence'] . '\'');
    $donnees1 = $reponse->fetch();


    if($_POST['doleGroupe']==1){
      $bdd->exec('INSERT INTO SeCompose(idTir, idLivret) VALUES(1, \''.$donnees1['idLivret'].'\')');
    }

    if($_POST['duillier']==1){
      $bdd->exec('INSERT INTO SeCompose(idTir, idLivret) VALUES(2, \''.$donnees1['idLivret'].'\')');
    }

    if($_POST['montBlanc']==1){
      $bdd->exec('INSERT INTO SeCompose(idTir, idLivret) VALUES(3, \''.$donnees1['idLivret'].'\')');
    }

    if($_POST['perceNeige']==1){
      $bdd->exec('INSERT INTO SeCompose(idTir, idLivret) VALUES(4, \''.$donnees1['idLivret'].'\')');
    }

    $reponse = $bdd->query('SELECT idHoraire FROM Horaire WHERE date=\'' . $_POST['jour'] . '\' AND heure=\'' . $_POST['heure'] . '\'');
    $donnees = $reponse->fetch();
    $horaire = $donnees['idHoraire'];

    for($i=0; $i<$_POST['rangeur']; $i++){
      $bdd->exec('INSERT INTO Occupe(idPoste, date, idHoraire, numLivret) VALUES(\''.$_POST['poste'].'\', \''.$_POST['jour'].'\', \''.$horaire++.'\', \''.$donnees1['idLivret'].'\')');
    }

    $reponse = $bdd->query('SELECT idLicence FROM Tireur WHERE idLicence=\'' . $_POST['idLicence'] . '\'');
    $donnees = $reponse->fetch();

    if($_POST['idLicence']==$donnees['idLicence']){
      $bdd->exec('UPDATE Tireur SET idClub=\''.$_POST['club'].'\', nomTireur=\''.$_POST['nom'].'\', prenomTireur=\''.$_POST['prenom'].'\', anneeNaissance=\''.$_POST['anneeNaissance'].'\',
      estGaucher=\''.$_POST['estGaucher'].'\', adresse=\''.$_POST['adresse'].'\', codePostalTireur=\''.$_POST['codePostal'].'\',  ville=\''.$_POST['ville'].'\',
      commentaire=\''.$_POST['commentaire'].'\', mail=\''.$_POST['email'].'\' WHERE idLicence=\'' . $_POST['idLicence'] . '\'');
    }else{
      $bdd->exec('INSERT INTO Tireur(idLicence, idClub, nomTireur, prenomTireur, anneeNaissance, estGaucher, adresse, codePostalTireur, ville, commentaire, mail)
      VALUES(\''.$_POST['idLicence'].'\', \''.$_POST['club'].'\', \''.$_POST['nom'].'\', \''.$_POST['prenom'].'\', \''.$_POST['anneeNaissance'].'\', \''.$_POST['estGaucher'].'\',
      \''.$_POST['adresse'].'\', \''.$_POST['codePostal'].'\', \''.$_POST['ville'].'\', \''.$_POST['commentaire'].'\', \''.$_POST['email'].'\')');
    }

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

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
              <form action="signIn/inscription" method="post">
                <input type="submit" class="btn btn-success" value="S'inscrire"></input>
                <input type="hidden" name="jour" value='<?php echo $jour ?>'>
                <input type="hidden" name="poste" value='<?php echo $i ?>'>
                <input type="hidden" name="heure" value='<?php echo $donnees['heure'] ?>'>
                <input type="hidden" name="repas" value='<?php echo $repas ?>'>
              </form>
              </td>
              <?php
            }else{
              $query = $bdd->query('select * from tireur t join participation p on t.idLicence = p.idLicence join occupe o on p.idLivret = o.numLivret where o.numLivret = '.$data['numLivret']);
              $data = $query->fetch();
              echo '<td>'.$data['nomTireur'].'<br>'.$data['prenomTireur'].'</td>';
            }

          }
          echo '</tr>';
        }

        ?>
      </tbody>
    </table>
  </body>
  </html>
