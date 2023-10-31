<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateExitController extends AbstractController
{
    #[Route('/updateExit')]
    public function updateExit(): Response
    {
        return $this->render('updateExit/updateExit.html.twig', []
        );
    }
}
