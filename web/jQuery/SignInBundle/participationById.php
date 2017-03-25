<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

$idLicence = $_POST['idLicence'];



$query = $bdd->query("SELECT count(idLicence) as nbIdLicence
                      FROM participation
                      WHERE idLicence >= '$idLicence'");


$query->execute();

echo json_encode($query->fetchAll());
