<?php

namespace App\Controller;

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
        return $this->render('personnage/persos.html.twig',[
            "pseudo"=>"toto","Age"=>23,"carac"=>[
                "force"=>3,
                "Agi"=>2,
                "intel"=>2
            ]
        ]);
    }
}
