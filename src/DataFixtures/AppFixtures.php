<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $product = new User();
         $product->setNom('ginseng');
         $product->setPrenom('carnitine');
         $product->setTelephone('24150');
         $product->setEmail('@test.fr');
         $product->setCampus('eni-Nantes');
         $manager->persist($product);

         $manager->flush();
    }

}
