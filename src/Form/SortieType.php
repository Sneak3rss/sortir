<?php

namespace App\Form;

use App\Entity\Sortie;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom',TextType::class,
            [
                'label' => 'Nom de la sortie : '
            ])

            ->add('dateHeureDebut', DateTimeType::class,
            [
                'label' => 'Date et heure de la sortie : ',
                'widget' => 'single_text'
            ])

            ->add('dateLimInscription', DateTimeType::class,
            [
                'label' => 'Date limite d\'inscription :',
                'widget' => 'single_text'
            ])

            ->add('nbInscriptionMax', NumberType::class,
            [
                'label' => 'Nombre de place : ',
                'attr' =>
                [
                    'min' => '1',
                    'max' => '8'
                ]
            ])

            ->add('duree', NumberType::class,
            [
                'label' => 'Durée : '
            ])


            ->add('infosSortie', TextareaType::class,
            [
                'label' => 'Description et infos : '
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}