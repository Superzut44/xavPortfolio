<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/inRegardsTo', name: 'inRegardsTo')]
    public function inRegardsTo(): Response
    {
        return $this->render('home/inRegardsTo.html.twig');
    }

    #[Route('/training', name: 'training')]
    public function training(): Response
    {
        return $this->render('home/training.html.twig');
    }
}
