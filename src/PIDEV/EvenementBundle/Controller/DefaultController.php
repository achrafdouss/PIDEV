<?php

namespace PIDEV\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIDEVEvenementBundle:Default:index.html.twig');
    }
}
