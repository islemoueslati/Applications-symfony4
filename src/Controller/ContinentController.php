<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repository): Response
    {
        $continents=$repository->findAll();
        return $this->render('continent/continents.html.twig',["continents"=>$continents]);
    }
}
