<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierAdminBundle:Default:index.html.php');
    }

    public function gestionAdminAction()
    {
        return $this->render('DuillierAdminBundle:Default:gestionAdmin.html.php');
    }


        public function supprimerAdminAction()
        {
            return $this->render('DuillierAdminBundle:Default:supprimerAdmin.html.php');
        }
}
