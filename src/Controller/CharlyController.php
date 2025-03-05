<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CharlyController extends AbstractController
{
    #[Route('/charly', name: 'app_charly')]
    public function index(): Response
    {
        return $this->render('charly/index.html.twig', [
            'controller_name' => 'CharlyController',
        ]);
    }
}
