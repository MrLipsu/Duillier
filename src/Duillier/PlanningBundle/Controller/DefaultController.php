<?php

namespace Duillier\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierPlanningBundle:Default:index.html.twig');
    }
}
