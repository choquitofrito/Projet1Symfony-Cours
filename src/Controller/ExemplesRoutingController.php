<?php

namespace App\Controller;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ExemplesRoutingController extends AbstractController
{
    /**
     * @Route ("/afficher/message/accueil")
     */
    public function afficherMessageAccueil()
    {
        return new Response("Bonjour à toutes!!");
    }
    /**
     * @Route ("/afficher/date")
     */
    public function afficherDate()
    {
        return new Response(date("Y M D"));
    }

    /**
     * @Route ("/afficher/bonjour/perso/{nom}/{prenom}")
     */
    public function afficherBonjourPerso (Request $req){
        return new Response ("Bonjour " . $req->get('nom') . "," . $req->get('prenom'));
    } 

    /**
     * @Route ("/exemple/redirect/imdb/{titre}")
     */
    public function exempleRedirectImdb (Request $req){
        $titre = $req->get('titre');
        $url = "https://www.imdb.com/find?q=". $titre ."&ref_=nv_sr_sm";
        return $this->redirect($url);

    }



}
