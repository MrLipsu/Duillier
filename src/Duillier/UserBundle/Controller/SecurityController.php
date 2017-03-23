<?php
// src/UserBundle/Controller/SecurityController.php;

namespace Duillier\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Duillier\UserBundle\Entity\User;

class SecurityController extends Controller
{
  /**
   * @Route("/login")
   */
  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->render('DuillierPlanningBundle:Default:index.html.php');
    }

    /*$em = $this->getDoctrine()->getManager();
    $user = new User();
    $user->setUsername('yoann');
    $user->setPassword('yoann');
    $user->setSalt('');
    $user->setRoles(array('ROLE_ADMIN'));

    $em->persist($user);
    $em->flush();*/
    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('DuillierUserBundle:Security:login.html.php', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}
