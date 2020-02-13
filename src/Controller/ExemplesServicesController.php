<?php

namespace App\Controller;



use App\Services\Chucky;
use App\Services\Bonjour;
use Psr\Log\LoggerInterface;
use App\Services\ChuckyLogger;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesServicesController extends AbstractController
{
    /**
     * @Route("/exemples/services/utilise/logger")
     */
    public function utiliseLogger(LoggerInterface $monLogger)
    {
        $monLogger->info("J'AI FAIM!!!");
        $monLogger->error("La maison est en feu!!!");


        return $this->render('exemples_services/utilise_logger.html.twig');
    }
    /**
     * @Route ("exemples/services/utilise/bonjour")
     */

    public function utiliseBonjour(Bonjour $objetBonjour)
    {
        $msg = $objetBonjour->direBonjour();
        return $this->render('exemples_services/utilise_bonjour.html.twig', ['msg' => $msg]);
    }

    /**
     * @Route ("exemples/services/utilise/chucky")
     */

    public function utiliseChucky(Chucky $objetChucky)
    {
        $msg = $objetChucky->getPhrase();
        return $this->render('exemples_services/utilise_chucky.html.twig', ['msg' => $msg]);
    }


    /**
     * @Route ("exemples/services/utilise/chucky/logger")
     */

    public function utiliseChuckyLogger(ChuckyLogger $objetChuckyLogger)
    {
        $msg = $objetChuckyLogger->getPhrase();
        return $this->render('exemples_services/utilise_chucky_logger.html.twig', ['msg' => $msg]);
    }
    
}
