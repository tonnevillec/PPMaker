<?php

namespace PPMaker\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use PPMaker\BackBundle\Entity\Config;

class AdminController extends Controller
{
    /**
     * @Route("/", name="back_home")
     * @Template("PPMakerBackBundle:Admin:index.html.twig")
     */
    public function indexAction()
    {
        $authCheck = $this->get('security.authorization_checker');
        if ($authCheck->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('back_admin'));
        }
        return $this->redirect($this->generateUrl('back_login'));
    }

    /**
     * @Route("/home", name="back_admin")
     */
    public function indexAdminAction()
    {
        $bundleList = $this->getDoctrine()
            ->getManager()
            ->getRepository('PPMakerBackBundle:Config')
            ->findAll()
        ;

        return $this->render('PPMakerBackBundle:Admin:admin.html.twig', array(
            'bundleList' => $bundleList,
        ));
    }

    /**
     * @Route("/parameters", name="back_parameters")
     * @Template("PPMakerBackBundle:Admin:parameters.html.twig")
     */
    public function parametersAdminAction()
    {
        // A ajouter avant pubf
        //* @Security("has_role('ROLE_ADMIN')")
        return ;
    }

    /**
     * @Route("/settings/{routeName}", name="back_settings")
     * @Template("PPMakerBackBundle:Admin:module_setting.html.twig")
     */
    public function settingsAdminAction()
    {
        return ;
    }

    /**
     * @Route("/login", name="back_login")
     * @Template("PPMakerBackBundle:Admin:login.html.twig")
     */
    public function loginAdminAction()
    {
        return ;
    }
}
