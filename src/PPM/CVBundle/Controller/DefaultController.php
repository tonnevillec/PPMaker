<?php

namespace PPM\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPMCVBundle:Default:index.html.twig');
    }
}
