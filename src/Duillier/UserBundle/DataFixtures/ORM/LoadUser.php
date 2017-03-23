<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace OC\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Duillier\UserBundle\Entity\User;
use Duillier\PlanningBundle\Entity\Tireur;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $repository = $manager->getRepository('PlanningBundle:Tireur');
    // Les noms d'utilisateurs à créer
    $listTireur = $repository->findAll();
    //$listNames = array('Alexandre', 'Marine', 'Anna');

    foreach ($listTireur as $tireur) {
      // On crée l'utilisateur
      $user = new User;

      $mail = $tireur->getMail();
      $password = $tireur->getMdp();

      // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
      $user->setUsername($mail);
      $user->setPassword($password);

      // On ne se sert pas du sel pour l'instant
      $user->setSalt('');
      // On définit uniquement le role ROLE_USER qui est le role de base
      $user->setRoles(array('ROLE_USER'));

      /*if($tireur->getIsChefGroupe() == 1){
        $user->setRoles(array('ROLE_GROUP'));
      }*/

      // On le persiste
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}
