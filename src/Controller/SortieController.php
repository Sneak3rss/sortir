<?php

namespace App\Controller;

use App\Entity\Sortie;
use App\Form\SortieType;
use App\Repository\LieuRepository;
use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    #[Route('/sortie/{id}', name: 'app_sortie',methods: ['GET'])]
    public function afficherSortie(int $id,  SortieRepository $sortieRepository): Response
    {

        $sortie = $sortieRepository->find($id);

        return $this->render('sortie/afficherSortie.html.twig',
            [
                'sortie' => $sortie
            ]);
    }
}