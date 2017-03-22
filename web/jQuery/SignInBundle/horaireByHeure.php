<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

$jour = $_POST['jour'];
$heure = $_POST['heure'];


$query = $bdd->query("SELECT *
                      FROM horaire
                      WHERE date = '$jour' and heure  = '$heure'");


$query->execute();

echo json_encode($query->fetchAll());
