<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello World from CelerBuild!',
        ]);
    }

    #[Route('/version', name: 'version')]
    public function version(): JsonResponse
    {
        return $this->json([
            'version' => $this->getParameter('app.version'),
        ]);
    }
}
