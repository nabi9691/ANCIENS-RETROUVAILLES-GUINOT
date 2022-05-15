<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecherchesController extends AbstractController
{
    /**
     * @Route("/recherches", name="app_recherches")
     */
    public function index(): Response
    {
        return $this->render('recherches/index.html.twig', [
            'controller_name' => 'RecherchesController',
        ]);
    }
}
