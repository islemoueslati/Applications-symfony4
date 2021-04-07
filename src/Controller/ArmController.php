<?php

namespace App\Controller;

use App\Entity\Arm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmController extends AbstractController
{
    /**
     * @Route("/arm", name="arm")
     */
    public function index(): Response
    {
        return $this->render('arm/index.html.twig');
    }
    /**
     * @Route("/arms", name="arms")
     */
    public function arms(): Response
    {
        Arm::creerArm();
        return $this->render('arm/arms.html.twig',["arms"=>Arm::$arms]);
    }
    /**
     * @Route ("/arms/{type}", name="afficher_arm")
     */
    public function afficherArm($type){
        Arm::creerArm();
        $arm=Arm::getArmParType($type);
        return $this->render('arm/arm.html.twig',["arm"=>$arm]);

    }
}
