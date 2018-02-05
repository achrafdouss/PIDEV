<?php

namespace PIDEV\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIDEVTemplateBundle:Default:index.html.twig');
    }
    public function DashboardAction()
    {
        return $this->render('PIDEVTemplateBundle:Default:layout.html.twig');
    }
    public function FrontAction()
    {
        return $this->render('PIDEVTemplateBundle:Default:layoutFront.html.twig');
    }

}
