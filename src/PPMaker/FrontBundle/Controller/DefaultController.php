<?php

namespace PPMaker\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="front_home")
     * @Template("PPMakerFrontBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        // If publication

        // Else
            // Page en construction
        return ;
    }
}
