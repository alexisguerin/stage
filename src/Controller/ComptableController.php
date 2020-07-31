<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DemandeComptable;
use App\Entity\Users;
use App\Form\ComptaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class ComptableController extends AbstractController
{
    /**
     * @Route("/comptabilite", name="comptabilite")
     */
    public function index()
    {
        $demandes = $this->getDoctrine()->getRepository(DemandeComptable::class)->findBy([],['datedemande'=>'desc']);
        return $this->render('comptable/index.html.twig', [
            'controller_name' => 'ComptableController',
            'demandes' => $demandes,
        ]);
    }
    /**
     * @Route("/comptabilite/comptable", name="comptableadmin")
     */
    public function indexadmin()
    {
        $demandes = $this->getDoctrine()->getRepository(DemandeComptable::class)->findBy([],['datedemande'=>'desc']);
        return $this->render('comptable/indexadmin.html.twig', [
            'controller_name' => 'ComptableController',
            'demandes' => $demandes,
        ]);
    }
    /**
     * @Route("/comptabilite/demande", name="demandecompta")
     */
    public function submit(Request $request):Response
    {
        $demande=new DemandeComptable();
        /* $user=$this->getUsers(); */
        $form=$this->createForm(ComptaType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('comptabilite');
        }

        return $this->render('comptable/demande.html.twig', [
            'comptaForm' => $form->createView(),
        ]);
    }
}
