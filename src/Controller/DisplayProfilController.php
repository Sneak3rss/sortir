<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DisplayProfilController extends AbstractController
{
    #[Route('/displayProfil')]
    public function displayProfil(): Response
    {
        return $this->render('displayProfil/displayProfil.html.twig', []
        );
    }
}
