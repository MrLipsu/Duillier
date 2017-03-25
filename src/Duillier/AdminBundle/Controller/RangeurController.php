<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; // N'oubliez pas ce use
use Symfony\Component\HttpFoundation\Request;

//Use pour les entities
use Duillier\PlanningBundle\Entity\Tireur;
use Duillier\PlanningBundle\Entity\SeCompose;
use Duillier\PlanningBundle\Entity\Occupe;

class RangeurController extends Controller
{

    public function gestionRangeurAction()
    {
      return $this->render('DuillierAdminBundle:Rangeur:gestionRangeur.html.php');
    }

    public function formModifierRangeurAction( $idPoste, $date, $idHoraire, $numLivret, $repas)
    {

      $em = $this
        ->getDoctrine()
        ->getManager();


      $participation = $em->getRepository('DuillierPlanningBundle:Participation' )->find($numLivret);
      $idLicence = $participation->getIdLicence();
      $nbEssai = $participation->getnbEssai();
      $nbRepas = $participation->getNbRepas();
      $isInGroupe = $participation->getIsInGroupe();
      $isChefGroupe = $participation->getIsChefGroupe();

      $tireur = $em->getRepository('DuillierPlanningBundle:Tireur' )->find($idLicence);
      $nomGroupe = $tireur->getNomGroupe();
      $idClub = $tireur->getIdClub();
      $nomTireur = $tireur->getNomTireur();
      $anneeNaissance = $tireur->getAnneeNaissance();
      $prenomTireur = $tireur->getPrenomTireur();
      $estGaucher = $tireur->getEstGaucher();
      $adresse = $tireur->getAdresse();
      $codePostalTireur = $tireur->getCodePostalTireur();
      $ville = $tireur->getVille();
      $commentaire = $tireur->getCommentaire();
      $mail = $tireur->getMail();

      $Horaire = $em->getRepository('DuillierPlanningBundle:Horaire' )->find($idHoraire);
      //$date = $Horaire->getDate();
      $heure = $Horaire->getHeure();


      //( 1 => 'doleGroupe', 2=>'duillier', 3 => 'montBlanc', 4 => 'perceNeige')
      $tirsparticipes = array( 1 => 0, 2=>0, 3 =>0, 4 => 0);
      for ($i=1; $i <= count($tirsparticipes); $i++) {

        $seCompose = $em->getRepository('DuillierPlanningBundle:SeCompose' )->findOneBy(
          array(
            'idTir'=> $i,
            'idLivret'=>$numLivret)
        );

        if (count($seCompose) != 0) {
          $tirsparticipes[$i] = 1;
        }

      }

      $clubs = $em->getRepository('DuillierPlanningBundle:Club' )->findAll();


      $em->flush();



      return $this->render('DuillierAdminBundle:Rangeur:formModifierRangeur.html.php', array(
        'idPoste' => $idPoste ,
        'date' => $date,
        'idHoraire' => $idHoraire,
        'numLivret' => $numLivret,
        'repas' => $repas,

        //Attribut de participation
        'idLicence' => $idLicence ,
        'nbEssai' => $nbEssai,
        'nbRepas' => $nbRepas,
        'isInGroupe' => $isInGroupe,
        'isChefGroupe' => $isChefGroupe,

        //tireur
        'nomGroupe' => $nomGroupe ,
        'idClub' => $idClub,
        'nomTireur' => $nomTireur,
        'prenomTireur' => $prenomTireur,
        'anneeNaissance' => $anneeNaissance,
        'estGaucher' => $estGaucher,
        'adresse' => $adresse,
        'codePostalTireur' => $codePostalTireur ,
        'ville' => $ville,
        'commentaire' => $commentaire,
        'mail' => $mail,

        //Horaire
        //'date' => $nomGroupe ,
        'heure' => $heure,

        //participation aux tirs
        'tirsparticipes' => $tirsparticipes,

        //liste des clubs
        'clubs' => $clubs

      ));
    }

    public function desinscrireAction($numLivret)
    {
      $em = $this
        ->getDoctrine()
        ->getManager();

      $rangeursOccupes = $em->getRepository('DuillierPlanningBundle:Occupe' )->findBy(
        array(
          //'idPoste' => $idPoste,
          //'idHoraire'=> $idHoraire,
          'numLivret'=>$numLivret)
      );

      foreach ($rangeursOccupes as $rangeur) {
        $em->remove($rangeur);
      }

      $tirsADesinscrire = $em->getRepository('DuillierPlanningBundle:SeCompose' )->findBy(
        array(
          'idLivret'=>$numLivret)
      );

      foreach ($tirsADesinscrire as $compose) {
        $em->remove($rangeur);
      }



      $participation = $em->getRepository('DuillierPlanningBundle:Participation' )->find($numLivret);
      $idLicence = $participation->getIdLicence();

      $tireur = $em->getRepository('DuillierPlanningBundle:Tireur' )->find($idLicence);
      $email = $tireur->getMail();

      $user = $em->getRepository('DuillierUserBundle:User' )->findOneBy(array(
        'username'=>$email)
      );
      $em->remove($user);

      $em->remove($participation);



      $em->flush();


      return  $this->redirectToRoute("duillier_admin_gestionRangeur");
      // return new Response(var_dump($rangeurs));
    }









    public function ModifierRangeurAction()
    {
      //SI LE FORMULAIRE EST VALIDE
      if (isset($_POST['valider'])) {
        $em = $this
          ->getDoctrine()
          ->getManager();

        //MISE A JOUR DES INFOS DU TIREUR
        $tireur = $em->getRepository('DuillierPlanningBundle:Tireur')->find($_POST['idLicence']);
        $tireur->setIdCLub($_POST['club']);
        $tireur->setNomTireur($_POST['nom']);
        $tireur->setPrenomTireur($_POST['prenom']);
        $tireur->setAnneeNaissance($_POST['anneeNaissance']);
        $tireur->setEstGaucher($_POST['estGaucher']);
        $tireur->setMail($_POST['email']);
        $tireur->setAdresse($_POST['adresse']);
        $tireur->setCodePostalTireur($_POST['codePostal']);
        $tireur->setVille($_POST['ville']);
        $tireur->setCommentaire($_POST['commentaire']);

        $em->flush();



        //MISE A JOUR DE SeCompose pour la participation (si une participation participe ou non à un tir donné)
        $tirs = array( 1 => 'doleGroupe', 2=>'duillier', 3 => 'montBlanc', 4 => 'perceNeige');

        //on fait la mise à jour pour chaque type de tir
        for ($i=1; $i <= count($tirs); $i++) {
          $em = $this
            ->getDoctrine()
            ->getManager();

          $seCompose = $em->getRepository('DuillierPlanningBundle:SeCompose' )->findOneBy(
            array(
              'idTir'=> $i,
              'idLivret'=>$_POST['idLivret'])
          );

          if($_POST[$tirs[$i]]==1 && count($seCompose) == 0){ //si le checkbox est coché et que SeCompose n'existe pas, on fait l'insert

              $seCompose = new SeCompose($i, $_POST['idLivret']);
              $em->persist($seCompose);

          }elseif ($_POST[$tirs[$i]]==0 && count($seCompose) != 0) { //si le check est pas coché mais qu'il participait au tir, on le delete
            $em->remove($seCompose);
          }
          $em->flush();
        }



        //MISE A JOUR DE PARTICIPATION
        $em = $this
          ->getDoctrine()
          ->getManager();

        $participation = $em->getRepository('DuillierPlanningBundle:Participation')->find($_POST['idLivret']);
        $participation->setNbEssai($_POST['numberNbEssai']);
        $participation->setNbRepas($_POST['numberNbRepas']);
        $participation->setMontantTotal($_POST['prix']);
        $participation->setIsInGroupe($_POST['groupe']);
        $participation->setIsChefGroupe($_POST['chefGroupe']);

        $em->flush();


        //MISE A JOUR DE OCCUPE
        //Récupération de l'idHoraire qui va être occupé
        $em = $this
          ->getDoctrine()
          ->getManager();

        $horaire = $em->getRepository('DuillierPlanningBundle:Horaire')->findOneBy(
          array(
            'date'=> new \DateTime($_POST['jour']),
            'heure'=>$_POST['heure'])
        );

        $idHoraire = $horaire->getIdHoraire();


        // //DELETE DES anciens OCCUPE
        $rangeursOccupesAVirer = $em->getRepository('DuillierPlanningBundle:Occupe' )->findBy(
          array(
            'numLivret'=>$_POST['idLivret'])
        );

        foreach ($rangeursOccupesAVirer as $rangeur) {
          $em->remove($rangeur);
        }

        //INSERT DES NOUVEAUX OCCUPE
        for ($i=0; $i < $_POST['rangeur']; $i++) {
          $newOccupe = new Occupe($_POST['poste'], new \DateTime($_POST['jour']), $idHoraire++, $_POST['idLivret']);

        $em->persist($newOccupe);
        }


        $em->flush();


        //REAFFICHAGE DU PLANNING DE GESTION DES RANGEURS
        //return new Response(var_dump($idHoraire));
        //return $this->render('DuillierAdminBundle:Rangeur:gestionRangeur.html.php');
        return  $this->redirectToRoute("duillier_admin_gestionRangeur");

      }
      return  $this->redirectToRoute("duillier_admin_gestionRangeur");
      //return $this->render('DuillierAdminBundle:Rangeur:gestionRangeur.html.php');
      // return $this->render('DuillierAdminBundle:Rangeur:formModifierRangeur.html.php', array(
      //   'idPoste' => $idPoste ,
      //   'date' => $date,
      //   'idHoraire' => $idHoraire,
      //   'numLivret' => $numLivret,
      //   'repas' => $repas,
      // ));
    }
}
