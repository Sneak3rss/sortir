<?php

namespace App\Form;

use App\Entity\Account;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nickname', TextType::class,['label' => 'Pseudo',
                'required' => false])
            ->add('name', TextType::class,['label' => 'Nom'])
            ->add('lastname', TextType::class,['label' => 'Prénom'])
            ->add('phone_number', TextType::class,['label' => 'Téléphone',
                'required' => false])
            ->add('email', TextType::class,['label' => 'Email'])
            ->add('password', PasswordType::class,['label' => 'Mot de passe'])
            ->add('fk_campus', ChoiceType::class,['label' => 'Campus',
                'choices' => [
                    'Rennes' => '1',
                    'Nantes' => '2',
                    'Niort' => '3',
                ]])
            ->add('fk_rank', ChoiceType::class,['label' => 'Grade',
                'choices' => [
                    'Administrateur' => '1',
                    'Utilisateur·rice' => '2',
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
