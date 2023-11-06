<?php

namespace App\Controller;


use App\Entity\Participant;
use App\Form\MyProfilType;


use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class MyProfilController extends AbstractController
{
    #[Route('/myProfil', methods: ['GET', 'POST'])]
    public function myProfil(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $this->getUser(); // Obtenir l'utilisateur actuel

        $form = $this->createForm(MyProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $submittedData = $form->getData(); // Récupérer les données soumises par le formulaire

            // Comparer le mot de passe soumis avec le mot de passe actuel de l'utilisateur
//            if (!$userPasswordHasher->isPasswordValid($user, $submittedData->getPassword())) {
//                $this->addFlash('attention', 'Le mot de passe doit être identique');
//            } else {
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Le profil a bien été enregistré');
            return $this->redirectToRoute('app_home_home');
        }
//        }

        return $this->render('myProfil/myProfil.html.twig', [
            'form' => $form->createView()
        ]);
    }


}
