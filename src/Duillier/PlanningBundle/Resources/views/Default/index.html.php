<?php
$bdd = new PDO('mysql:host=\'https://login-16.hoststar.ch/phpMyAdmin/\';dbname=tsduillier;charset=utf8', 'tsduillier', 'Perce-neige-2017');
//$reponse = $bdd->query('INSERT INTO Poste(idPoste) VALUES(\'1\')');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
    <h1 class="text-center">Vendredi 31 mars 2017</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
         <th></th>
         <?php
            for($poste=1; $poste<=6; $poste++){
              echo '<th>Poste '.$poste.'</th>';
            }
          ?>
       </tr>
    </thead>
      <tbody>
        <?php
          for($heure=8; $heure<=12; $heure++){
            for($minute=0; $minute<=45; $minute +=15){
              echo '<tr>';
              if($heure<10){
                if($minute<15){
                  echo '<th>0'.$heure.'h'.$minute.'0</th>';
                }else{
                  echo '<th>0'.$heure.'h'.$minute.'</th>';
                }
              }else{
                if($minute<15){
                  echo '<th>'.$heure.'h'.$minute.'0</th>';
                }else{
                  echo '<th>'.$heure.'h'.$minute.'</th>';
                }
              }

              for($i=0;$i<6;$i++){
                echo '<td><a href="" class="btn btn-default">S\'inscrire</a></td>';
              }
              echo '</tr>';
            }
          }
         ?>
      </tbody>
    </table>
  </body>
</html>
