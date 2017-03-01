<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

$nomTireur = $_POST['nom'];
$prenomTireur = $_POST['prenom'];

$query = $bdd->query("SELECT * FROM tireur WHERE nomTireur = '$nomTireur' And prenomTireur = '$prenomTireur'");
///$query = $bdd->prepare("SELECT * FROM tireur WHERE nomTireur = 'sagodira' And prenomTireur = 'yoan'");
$query->execute();

echo json_encode($query->fetchAll());
