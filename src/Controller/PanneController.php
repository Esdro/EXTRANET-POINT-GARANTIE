<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanneController extends AbstractController
{
    #[Route('/panne', name: 'app_panne')]
    public function index(): Response
    {
        return $this->render('panne/index.html.twig', [
            'controller_name' => 'PanneController',
        ]);
    }
}
