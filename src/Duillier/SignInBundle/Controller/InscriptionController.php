<?php

namespace Duillier\SignInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Duillier\PlanningBundle\Entity\Tireur;



class InscriptionController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('DuillierSignInBundle:Inscription:formulaire.html.php');
        return new Response($content);
    }

    public function groupeAction()
    {
        //récupeation du user courant
        $user = $this->getUser();
        $username = $user->getUsername();

        //chargement du EntityManager
        $em = $this->getDoctrine()->getManager();

        //récupération du tireur associé à l'utilisateur
        $repositoryTireur = $em->getRepository('DuillierPlanningBundle:Tireur');
        $tireur = $repositoryTireur->findOneBy(
          array('mail' => $username)
        );

        //récupération du club associé au tireur
        $repositoryClub = $em->getRepository('DuillierPlanningBundle:Club');
        $idClub = $tireur->getIdClub();
        $club = $repositoryClub->findOneBy(
          array('idClub' => $idClub)
        );
        /*
        //récupération de tous les tireurs appartenant à notre club
        $listTireurs = $repositoryTireur->findBy(
          array('idClub' => $idClub)
        );

        //récupération des participations de nos tireurs
        $repositoryParticipation = $em->getRepository('DuillierPlanningBundle:Participation');
        $listParticipation;
        foreach ($listTireurs as $tireur) {
          //$listLicence[] = $tireur->getIdLicence();
          $listParticipation[] = $repositoryParticipation->findBy(array('idLicence' => $tireur->getIdLicence()));
        }

        $data;
        foreach($listParticipation as $participation){
          if($participation != null)
            $data[] = $participation;
        }
        */




        return $this->render('DuillierSignInBundle:Inscription:inscriptionGroupe.html.php', array('club' => $club ));

        //var_dump($data);


    }
}
