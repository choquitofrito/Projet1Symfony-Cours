<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmbedControllerVueController extends AbstractController
{
    /**
     * @Route ("embed/controller/vue/affiche/vue1")
     */
    public function afficheVue1()
    {
        return $this->render('embed_controller_vue/affiche_vue1.html.twig');
    }

    /**
     * @Route ("embed/controller/vue/affiche/vue2")
     */
    public function afficheVue2()
    {
        return $this->render('embed_controller_vue/affiche_vue2.html.twig');
    }


    public function donneesDynamiques($nombreVilles)
    {
        $villes = ['Madrid', 'NY', 'Bruxelles', 'Paris', 'Rome'];
        $villes = array_slice ($villes,0,$nombreVilles);

        return $this->render(
            'embed_controller_vue/donnees_dynamiques.html.twig',
            ['villes' => $villes]
        );
    }
}
