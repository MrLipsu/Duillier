<?php
$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');


$accesAdmin=1;
  if(isset($_POST['connexionAdmin'])){

          $reponse = $bdd->query('SELECT login FROM Admin WHERE login=\'' . $_POST['login'] . '\'');
          $donnees = $reponse->fetch();

                $reponsemdp = $bdd->query('SELECT mdp FROM Admin WHERE login=\'' . $_POST['login'] . '\'');
                $donneesmdp = $reponsemdp->fetch();


              if($_POST['login']==$donnees['login']){
                if($_POST['mdp']==$donneesmdp['mdp']){
                  $accesAdmin=1;
                }
                else {
                  $accesAdmin=0;
                }
              }
              else{
                $accesAdmin=0;

              }

              if($accesAdmin==1){
                include('index.html.php');
              }
              else {
                include('refusConnexion.html.php');
              }

            }
