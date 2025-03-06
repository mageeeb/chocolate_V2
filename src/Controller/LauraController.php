<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LauraController extends AbstractController
{
    #[Route('/laura', name: 'app_laura')]
    public function index(): Response
    {
        return $this->render('laura/index.html.twig', [
            'controller_name' => 'LauraController',
        ]);
    }
}
