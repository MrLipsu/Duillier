<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; // N'oubliez pas ce use
use Symfony\Component\HttpFoundation\Request;

class RangeurController extends Controller
{

    public function gestionRangeurAction()
    {
      return $this->render('DuillierAdminBundle:Rangeur:gestionRangeur.html.php');
    }

    public function modifierRangeurAction( $idPoste, $date, $idHoraire, $numLivret, $repas)
    {
      return $this->render('DuillierAdminBundle:Rangeur:modifierRangeur.html.php', array(
        'idPoste' => $idPoste ,
        'date' => $date,
        'idHoraire' => $idHoraire,
        'numLivret' => $numLivret,
        'repas' => $repas,
      ));
    }

    public function desinscrireAction($numLivret)
    {
      $em = $this
        ->getDoctrine()
        ->getManager();

      $rangeurs = $em->getRepository('DuillierPlanningBundle:Occupe' )->findBy(
        array(
          //'idPoste' => $idPoste,
          //'idHoraire'=> $idHoraire,
          'numLivret'=>$numLivret)
      );

      foreach ($rangeurs as $rangeur) {
        $em->remove($rangeur);
      }

      $participation = $em->getRepository('DuillierPlanningBundle:Participation' )->find($numLivret);
      $em->remove($participation);

      $em->flush();


      return  $this->redirectToRoute("duillier_admin_gestionRangeur");
      // return new Response(var_dump($rangeurs));
    }
}
