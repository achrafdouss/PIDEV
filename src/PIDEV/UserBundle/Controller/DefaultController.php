<?php

namespace PIDEV\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIDEVUserBundle:Default:index.html.twig');
    }
}
