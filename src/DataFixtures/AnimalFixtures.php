<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // les continents
        $continent1= new Continent();
        $continent1->setLibelle("Europe");
        $manager->persist($continent1);

        $continent2= new Continent();
        $continent2->setLibelle("Asie");
        $manager->persist($continent2);

        $continent3= new Continent();
        $continent3->setLibelle("Afrique");
        $manager->persist($continent3);

        $continent4= new Continent();
        $continent4->setLibelle("Amérique");
        $manager->persist($continent4);

        $continent5= new Continent();
        $continent5->setLibelle("Océanie");
        $manager->persist($continent5);

        //les familles
        $c1= new Famille();
        $c1->setLibelle("Mammifères")
            ->setDescription("Animaux vertébres nourissant lerus petits avec du lait");
        $manager->persist($c1);

        $c2= new Famille();
        $c2->setLibelle("Reptiles")
            ->setDescription("Animaux vertebres qui rampent");
        $manager->persist($c2);

    //Les animaux
        $a1=new Animal();
        $a1->setNom("chien")
            ->setDescription("un animal domestique")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5);
        $manager->persist($a1);

        $a2=new Animal();
        $a2->setNom("cochon")
            ->setDescription("un animal d'elevage")
            ->setImage("cochon.png")
            ->setPoids(20)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent3)
            ->addContinent($continent5);

        $manager->persist($a2);

        $a3=new Animal();
        $a3->setNom("serpent")
            ->setDescription("un animal sauvage")
            ->setImage("serpent.png")
            ->setPoids(8)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent5);

        $manager->persist($a3);

        $a4=new Animal();
        $a4->setNom("crocodile")
            ->setDescription("un animal sauvage")
            ->setImage("crocodile.png")
            ->setPoids(50)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4)
            ->addContinent($continent5);
        $manager->persist($a4);

        $a5=new Animal();
        $a5->setNom("singe")
            ->setDescription("un animal trés mignon")
            ->setImage("singe.png")
            ->setPoids(35)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent4);

        $manager->persist($a5);

        $manager->flush();
    }
}
