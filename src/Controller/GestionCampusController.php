<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionCampusController extends AbstractController
{
    #[Route('/gestionCampus')]
    public function gestionCampus(): Response
    {
        return $this->render('gestionCampus/gestionCampus.html.twig', []
        );
    }
}
