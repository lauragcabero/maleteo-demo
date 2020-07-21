<?php

namespace App\Controller;

use App\Repository\ReviewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/maleteo", name="maleteo_home")
     */
    public function showLandingPage(ReviewsRepository $repository)
    {
        $reviews = $repository->findAll();
        $lastReviews = array_slice($reviews, -3);
        return $this->render('home.html.twig', ['lastReviews' => $lastReviews]);
    }

}
