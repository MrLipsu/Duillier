<?php

namespace Duillier\SignInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('DuillierSignInBundle:Inscription:formulaire.html.php');
        return new Response($content);
    }
}
