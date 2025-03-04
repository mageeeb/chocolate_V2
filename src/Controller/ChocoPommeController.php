<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChocoPommeController extends AbstractController
{
    #[Route('/choco/pomme', name: 'app_choco_pomme')]
    public function index(): Response
    {
        return $this->render('choco_pomme/index.html.twig', [
            'controller_name' => 'ChocoPommeController',
        ]);
    }
}
