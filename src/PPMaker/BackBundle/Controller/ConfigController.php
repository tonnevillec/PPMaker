<?php

namespace PPMaker\BackBundle\Controller;

use PPMaker\BackBundle\Entity\Config;
use PPMaker\BackBundle\Form\ConfigType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConfigController extends Controller
{
    /**
     * @Route("/config", name="config_list")
     */
    public function indexAction()
    {
        $bundleList = $this->getDoctrine()
            ->getManager()
            ->getRepository('PPMakerBackBundle:Config')
            ->findAll()
        ;

        return $this->render('PPMakerBackBundle:Config:index.html.twig', array(
            'bundleList' => $bundleList,
        ));
    }

    /**
     * @Route("/config/add", name="config_add")
     */
    public function addAction(Request $request)
    {
        $config = new Config();
        $form   = $this->createForm(new ConfigType(), $config);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($config);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Module bien enregistré.');

            return $this->redirectToRoute('config_list');
        }

        return $this->render('PPMakerBackBundle:Config:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}