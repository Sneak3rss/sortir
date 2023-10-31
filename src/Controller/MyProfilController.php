<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyProfilController extends AbstractController
{
    #[Route('/myProfil')]
    public function myProfil(): Response
    {
        return $this->render('myProfil/myProfil.html.twig', []
        );
    }
}
