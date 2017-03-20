<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction()
  {
    return $this->render('DuillierAdminBundle:Default:index.html.php');
  }

  public function nouveauConcoursAction()
  {
    return $this->render('DuillierAdminBundle:Default:nouveauConcours.html.php');
  }

  public function gestionClubAction()
  {
    return $this->render('DuillierAdminBundle:Default:gestionClub.html.php');
  }

  public function modifierClubAction()
  {
    return $this->render('DuillierAdminBundle:Default:modifierClub.html.php');
  }

  public function supprimerClubAction()
  {
    return $this->render('DuillierAdminBundle:Default:supprimerClub.html.php');
  }

  public function ajouterClubAction()
  {
    return $this->render('DuillierAdminBundle:Default:ajouterClub.html.php');
  }

  public function gererRepasAction()
  {
    return $this->render('DuillierAdminBundle:Default:gererRepas.html.php');
  }

  public function gestionAdminAction()
  {
    return $this->render('DuillierAdminBundle:Default:gestionAdmin.html.php');
  }


  public function supprimerAdminAction()
  {
    return $this->render('DuillierAdminBundle:Default:supprimerAdmin.html.php');
  }

  public function ajouterAdminAction()
  {
    return $this->render('DuillierAdminBundle:Default:ajouterAdmin.html.php');
  }

  public function ajoutAdminAction()
  {
    return $this->render('DuillierAdminBundle:Default:ajoutAdmin.html.php');
  }

  public function connexionAdminAction()
  {
    return $this->render('DuillierAdminBundle:Default:connexionAdmin.html.php');
  }

    public function verifConnexionAdminAction()
    {
      return $this->render('DuillierAdminBundle:Default:verifConnexionAdmin.html.php');
    }

    public function refusConnexionAction()
    {
      return $this->render('DuillierAdminBundle:Default:refusConnexion.html.php');
    }

    public function gestionRangeurAction()
    {
      return $this->render('DuillierAdminBundle:Default:gestionRangeur.html.php');
    }

    public function modifierRangeurAction( $idPoste, $date, $idHoraire, $numLivret)
    {
      return $this->render('DuillierAdminBundle:Default:modifierRangeur.html.php');
    }
}
