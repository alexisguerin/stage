<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EspacePersoController extends AbstractController
{
    /**
     * @Route("/perso", name="espace_perso")
     */
    public function index()
    {
        return $this->render('espace_perso/index.html.twig', [
            'controller_name' => 'EspacePersoController',
        ]);
    }
}
