<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionVillesController extends AbstractController
{
    #[Route('/gestionVilles')]
    public function index(): Response
    {
        return $this->render('gestionVilles/gestionVilles.html.twig', []
        );
    }
}
