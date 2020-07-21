<?php

namespace App\Controller;

use App\Entity\Demo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestController extends AbstractController
{
    /**
     * @Route("/maleteo/solicitudes", name="maleteo_requests")
     */
    public function showRequests()
    {
        $requests = $this->getDoctrine()
            ->getRepository(Demo::class)
            ->findAll();
        return $this->render('requests.html.twig', ['requests' => $requests]);
    }

}
