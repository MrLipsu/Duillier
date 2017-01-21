<?php

namespace Duillier\SignInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierSignInBundle:Default:index.html.twig');
    }
}
