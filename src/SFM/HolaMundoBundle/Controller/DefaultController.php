<?php

namespace SFM\HolaMundoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
    * @extra:Route("/", name="_holamundo")
    */    
    public function indexAction()
    {
        return $this->render('SFMHolaMundoBundle:Default:index.html.twig');
    }
}