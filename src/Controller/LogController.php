<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogController extends AbstractController
{
    #[Route('/', methods: ['GET'])]
    public function log(): Response
    {
        return $this->render('log/log.html.twig', []
        );
    }
}