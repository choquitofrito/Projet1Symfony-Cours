<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeritageTwigController extends AbstractController
{
    /**
     * @Route("/heritage/twig/{param1}", name="heritage_twig")
     */
    public function index()
    {
        return $this->render('heritage_twig/index.html.twig');
    }

    /**
     * @Route ("/heritage/autre")
     */
    public function autre ()
    {
        return $this->render('heritage_twig/autre.html.twig');
    }



}
