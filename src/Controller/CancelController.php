<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CancelController extends AbstractController
{
    #[Route('/cancelExit')]
    public function cancelExit(): Response
    {
        return $this->render('cancelExit/cancelExit.html.twig', []
        );
    }
}
