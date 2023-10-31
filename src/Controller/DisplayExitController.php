<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DisplayExitController extends AbstractController
{
    #[Route('/displayExit')]
    public function displayExit(): Response
    {
        return $this->render('displayExit/displayExit.html.twig', [
        ]);
    }
}
