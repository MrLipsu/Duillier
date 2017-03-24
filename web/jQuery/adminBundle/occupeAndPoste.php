<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

$idDebut = $_POST['idDebut'];
$idFin = $_POST['idFin'];
$idPoste = $_POST['idPoste'];


$query = $bdd->query("SELECT count(idHoraire) as nbIdHoraire, numLivret
                      FROM occupe o
                      JOIN poste p on o.idPoste = p.idPoste
                      WHERE o.idHoraire >= '$idDebut' and o.idHoraire <= '$idFin' and o.idPoste = $idPoste
                      GROUP BY numLivret"); 


$query->execute();

echo json_encode($query->fetchAll());
