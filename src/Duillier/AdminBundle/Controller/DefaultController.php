<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierAdminBundle:Default:index.html.php');
    }
}
