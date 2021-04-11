<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $c1= new Famille();
        $c1->setLibelle("Mammifères")
            ->setDescription("Animaux vertébres nourissant lerus petits avec du lait");
        $manager->persist($c1);
        $c2= new Famille();
        $c2->setLibelle("Reptiles")
            ->setDescription("Animaux vertebres qui rampent");
        $manager->persist($c2);


        $a1=new Animal();
        $a1->setNom("chien")->setDescription("un animal domestique")->setImage("chien.png")->setPoids(10)->setDangereux(false)->setFamille($c1);
        $manager->persist($a1);

        $a2=new Animal();
        $a2->setNom("cochon")->setDescription("un animal d'elevage")->setImage("cochon.png")->setPoids(20)->setDangereux(false)->setFamille($c1);
        $manager->persist($a2);

        $a3=new Animal();
        $a3->setNom("serpent")->setDescription("un animal sauvage")->setImage("serpent.png")->setPoids(8)->setDangereux(true)->setFamille($c2);
        $manager->persist($a3);

        $a4=new Animal();
        $a4->setNom("crocodile")->setDescription("un animal sauvage")->setImage("crocodile.png")->setPoids(50)->setDangereux(true)->setFamille($c2);
        $manager->persist($a4);

        $a5=new Animal();
        $a5->setNom("singe")->setDescription("un animal trés mignon")->setImage("singe.png")->setPoids(35)->setDangereux(false)->setFamille($c1);
        $manager->persist($a5);

        $manager->flush();
    }
}
