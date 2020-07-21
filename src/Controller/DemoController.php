<?php

namespace App\Controller;

use App\Entity\Demo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/maleteo/submit", name="maleteo_data_receiver")
     */
    public function insertDemo(EntityManagerInterface $em, Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $city = $request->get('city');
        
        $demo = new Demo();
        $demo->setName($name);
        $demo->setEmail($email);
        $demo->setCity($city);
        
        $em->persist($demo);
        $em->flush();

        return $this->render('form-response.html.twig',['name'=>$name]);
    }
}