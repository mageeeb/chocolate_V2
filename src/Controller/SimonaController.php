<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SimonaController extends AbstractController
{
    #[Route('/simona', name: 'app_simona')]
    public function index(): Response
    {
        return $this->render('simona/index.html.twig', [
            'controller_name' => 'SimonaController',
        ]);
    }
}
