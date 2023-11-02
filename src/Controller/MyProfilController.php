<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\MyProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyProfilController extends AbstractController
{
    #[Route('/myProfil')]
    public function myProfil(): Response
    {
        $user = new User();
        $form = $this->createForm(MyProfilType::class, $user);

        return $this->render('myProfil/myProfil.html.twig', [
            'form'=> $form
        ]);
    }
}
