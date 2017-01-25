<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

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
    $reponse = $bdd->query('SELECT date FROM jour WHERE date=\''.$jour.'\'');
    while ($donnees = $reponse->fetch()){
      //Conversion de la date en français
      $jour_semaine = array(1=>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi", 7=>"Dimanche");
      $nom_mois = array(1=>"Janvier", 2=>"Février", 3=>"Mars", 4=>"Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Aout", 9=>"Septembre", 10=>"Octobre", 11=>"Novembre", 12=>"Décembre");
      list($annee, $mois, $jourN) = explode ("-", $donnees['date']);
      $timestamp = mktime(0,0,0, date($mois), date($jourN), date($annee));
      $njour = date("N",$timestamp);
      $nmois = date("n",$timestamp);
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
        $reponse = $bdd->query('SELECT heure FROM Horaire WHERE date=\''.$jour.'\'');
        while ($donnees = $reponse->fetch()){
          echo '<tr>';
          echo '<th>'.$donnees['heure'].'</th>';
          //les boutons s'inscrire dans chaque colonne
          for($i=0;$i<6;$i++){
            echo '<td><a href="signIn/inscription" class="btn btn-default">S\'inscrire</a></td>';
          }
          echo '</tr>';
        }

        ?>
      </tbody>
    </table>
  </body>
  </html>
