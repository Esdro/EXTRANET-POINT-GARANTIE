<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReparationController extends AbstractController
{
    #[Route('/reparation', name: 'app_reparation')]
    public function index(): Response
    {
        return $this->render('reparation/index.html.twig', [
            'controller_name' => 'ReparationController',
        ]);
    }
}
