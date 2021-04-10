<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1=new Animal();
        $a1->setNom("chien")->setDescription("un animal domestique")->setImage("chien.png");
        $manager->persist($a1);

        $a2=new Animal();
        $a2->setNom("cochon")->setDescription("un animal d'elevage")->setImage("cochon.png");
        $manager->persist($a2);

        $a3=new Animal();
        $a3->setNom("serpent")->setDescription("un animal dangereux")->setImage("serpent.png");
        $manager->persist($a3);

        $a4=new Animal();
        $a4->setNom("crocodile")->setDescription("un animal trés dangereux")->setImage("crocodile.png");
        $manager->persist($a4);

        $a5=new Animal();
        $a5->setNom("singe")->setDescription("un animal trés mignon")->setImage("singe.png");
        $manager->persist($a5);

        $manager->flush();
    }
}
