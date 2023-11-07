<?php

namespace App\Controller;
use App\Entity\Account;
use App\Form\AccountType;
use App\Repository\AccountRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account_list', methods: ['GET'])]
    public function list(AccountRepository $accountRepository): Response
    {
        $accounts = $accountRepository->findAll();

        return $this->render('account/list.html.twig', [
            'accounts' => $accounts
        ]);
    }

    #[Route('/account/add', name: 'app_account_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $account = new Account();
        $accountForm = $this->createForm(AccountType::class, $account);
        $accountForm->handleRequest($request);

        if($accountForm->isSubmitted() && $accountForm->isValid()){
            $em->persist($account);
            $em->flush();

            $this->addFlash('success', 'Le compte à bien été crée' );

            return $this->render('account/list.html.twig', ['accountForm' => $accountForm]);
        }


        return $this->render('account/create.html.twig', ['accountForm' => $accountForm]);
    }
}
