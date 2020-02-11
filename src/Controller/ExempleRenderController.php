<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExempleRenderController extends AbstractController
{
    /**
     * @Route("/exemple/render", name="exemple_render")
     */
    public function index()
    {
        return $this->render('exemple_render/index.html.twig');
    }

    /**
     * @Route("/envoyer/ville")
     */
    public function envoyerVille()
    {
        $ville = "Bruxelles";
        return $this->render(
            'exemple_render/envoyer_ville.html.twig',
            ['paramVille' => $ville]
        );
    }

    /**
     * @Route("/envoyer/ville/alt")
     */
    public function envoyerVilleAlt()
    {
        $ville = "Bruxelles";
        $message = "";
        if ($ville == "Bruxelles") {
            $message = "Nous sommes à Bruxelles";
        } else {
            $message = "Nous sommes loin";
        }
        return $this->render(
            'exemple_render/envoyer_ville.html.twig',
            [
                'paramVille' => $ville,
                'message' => $message
            ]
        );
    }




    /**
     * @Route("/envoyer/array/villes")
     */
    public function envoyerArrayVilles()
    {
        $villes = ['Bruxelles', 'Madrid', 'Rabat'];
        return $this->render(
            'exemple_render/envoyer_array_villes.html.twig',
            ['lesVilles' => $villes]
        );
    }

    

}
