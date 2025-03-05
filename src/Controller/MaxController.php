<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MaxController extends AbstractController
{
    #[Route('/max', name: 'app_max')]
    public function index(): Response
    {
        return $this->render('max/index.html.twig', [
            'controller_name' => 'MaxController',
        ]);
    }
}
