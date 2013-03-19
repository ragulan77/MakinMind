<?php

namespace MakinMind\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MakinMindPortalBundle:Default:index.html.twig');
    }
}
