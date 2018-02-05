<?php

namespace PIDEV\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIDEVProduitBundle:Default:index.html.twig');
    }
}
