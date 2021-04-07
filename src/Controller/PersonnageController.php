<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="personnage")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }
    /**
     * @Route("/persos", name="persos")
     */
    public function persos(): Response
    {
       Personnage::creerPersonnage();
        return $this->render('personnage/persos.html.twig',["Players"=>Personnage::$personnages]);
    }
}
