<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionsController extends AbstractController
{
    /**
     * @Route ("/sessions/creer/variable/session")
     */
    public function creerVariableSession (SessionInterface $objSession) {
        // session_start
        // $_SESSION['nom']='Lucy';
        // session_close
        $objSession->set('nom','Lucy');
        return $this->render ('/sessions/creer_variable_session.html.twig');

    }

}
