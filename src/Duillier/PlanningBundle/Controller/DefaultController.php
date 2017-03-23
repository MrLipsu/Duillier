<?php

namespace Duillier\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Duillier\UserBundle\Entity\User;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierPlanningBundle:Default:index.html.php');
    }


    public function formAction(Request $request)
    {

        if($request->isMethod('POST')){

          $em = $this->getDoctrine()->getManager();

          $user = new User();
          $user->setUsername($_POST["email"]);
          $user->setPassword($_POST["mdp"]);
          $user->setSalt('');
          if($_POST["chefGroupe"] == 1){
            $user->setRoles(array('ROLE_GROUP'));
          }else{
            $user->setRoles(array('ROLE_USER'));
          }


          $em->persist($user);
          $em->flush();
        }



        return $this->render('DuillierPlanningBundle:Default:index.html.php');
    }
}
