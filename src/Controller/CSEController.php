<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DemandeCSE;
use App\Form\CSEType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CSEController extends AbstractController
{
    /**
     * @Route("/cse", name="cse")
     */
    public function index()
    {
        return $this->render('cse/index.html.twig', [
            'controller_name' => 'CSEController',
        ]);
    }
    /**
     * @Route("/cse/demande", name="demandecse")
     */
    public function submit(Request $request):Response
    {
        $demande=new DemandeCSE();
        $form=$this->createForm(CSEType::class, $demande);
        $form->handleRequest($request);
        return $this->render('cse/demande.html.twig', [
            'cseForm' => $form->createView(),
        ]);
    }
    /* public function article($slug)
    {
    // On récupère l'article correspondant au slug
        $article = $this->getDoctrine()->getRepository(Articles::class)->findOneBy(['slug' => $slug]);

    // On récupère les commentaires actifs de l'article
        $commentaires = $this->getDoctrine()->getRepository(Commentaires::class)->findBy([
            'articles' => $article,
            'actif' => 1
            ],['created_at' => 'desc']);

        if(!$article){
        // Si aucun article n'est trouvé, nous créons une exception
        throw $this->createNotFoundException('L\'article n\'existe pas');
        }

        // Si l'article existe nous envoyons les données à la vue
        return $this->render('articles/article.html.twig', compact('article', 'commentaires'));
} */
}
