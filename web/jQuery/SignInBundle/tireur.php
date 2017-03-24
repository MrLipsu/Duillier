<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', 'root');

$nomTireur = $_POST['nom'];
$prenomTireur = $_POST['prenom'];

$query = $bdd->query("SELECT t.* FROM tireur t
                      LEFT JOIN club c on c.idClub = t.idClub
                      WHERE t.nomTireur = '$nomTireur' And t.prenomTireur = '$prenomTireur'");

//"SELECT * FROM tireur t JOIN club c on t.idClub = c.idClub WHERE nomTireur = '$nomTireur' And prenomTireur = '$prenomTireur'
///$query = $bdd->prepare("SELECT * FROM tireur WHERE nomTireur = 'sagodira' And prenomTireur = 'yoan'");
$query->execute();

echo json_encode($query->fetchAll());
