<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionsController extends AbstractController
{
    /**
     * @Route ("/sessions/creer/variable/session")
     */
    public function creerVariableSession(SessionInterface $objSession)
    {
        $objSession->set('nom', 'Lucy');
        return $this->render('/sessions/creer_variable_session.html.twig');
    }

    /**
     * @Route ("/sessions/afficher/variable/session")
     */
    public function afficherVariableSession(SessionInterface $objSession)
    {
        $nom = $objSession->get('nom');
        return $this->render(
            '/sessions/afficher_variable_session.html.twig',
            ['nom' => $nom]
        );
    }

    /**
     * @Route ("/sessions/creer/variable/objet")
     */
    public function creerVariableObjet(SessionInterface $objSession)
    {
        $objDate = new DateTime();
        $objSession->set('uneDate', $objDate);
        return $this->render('/sessions/creer_variable_objet.html.twig');
    }


    /**
     * @Route ("/sessions/afficher/variable/objet")
     */
    public function afficherVariableObjet(SessionInterface $objSession)
    {
        $objDate = $objSession->get('uneDate');
        return $this->render(
            '/sessions/afficher_variable_objet.html.twig',
            ['uneDate' => $objDate]
        );
    }
}
