<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateExitController extends AbstractController
{
    #[Route('/createExit')]
    public function createExit(): Response
    {
        return $this->render('createExit/createExit.html.twig', []
        );
    }
}