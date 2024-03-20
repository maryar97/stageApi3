<?php

namespace App\Controller;

use App\Entity\Formedeboxe;
use App\Form\FormedeboxeFormType;
use App\Repository\FormedeboxeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class FormedeboxeController extends AbstractController
{
    #[Route('/formedeboxe', name: 'app_formedeboxe')]
    public function index(FormedeboxeRepository $formedeboxeRepository): Response
    {
        $forme=$formedeboxeRepository->findBy(['id' => 1]);
        $forme1=$formedeboxeRepository->findBy(['id' => 2]);
        $forme2=$formedeboxeRepository->findBy(['id' => 3]);
        $forme3=$formedeboxeRepository->findBy(['id' => 4]);


        return $this->render('formedeboxe/index.html.twig', [
            'formes'=>$forme,'formes1'=>$forme1,'formes2'=>$forme2,'formes3'=>$forme3,
            'routes' => '/' ,
        ]);
    }

    #[Route('formedeboxe/liste', name: 'liste')]
    public function liste(FormedeboxeRepository $formedeboxeRepository): Response
    {
        $formedeboxes = $formedeboxeRepository->findAll();

        return $this->render('formedeboxe/liste.html.twig', [
            'formedeboxes' => $formedeboxes,
        ]); 

        }

        #[Route('/ajout', name: 'add')]
        public function ajout(Request $request, EntityManagerInterface $em): Response
        {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        // on crée une "nouvelle forme de boxe"
        $formedeboxe = new Formedeboxe(); 

        // on crée le formulaire
        $formedeboxeForm = $this->createForm(FormedeboxeFormType::class, $formedeboxe);
        
        // on traite la requête du formulaire
        $formedeboxeForm->handleRequest($request);
        // dd($formedeboxeForm);

        // on verifie si le formulaire est soumis ET valide
        if($formedeboxeForm->isSubmitted() && $formedeboxeForm->isValid()){
            // on génère le nom
            //dd($produit);
            $prix = $formedeboxe->getPrix();
            $formedeboxe->setPrix($prix);


            // on stock
            $em->persist($formedeboxe);
            $em->flush();

            $this->addFlash('success', 'Forme de boxe ajoutée avec succès');

            // on redirige 
            return $this->redirectToRoute('liste');
        }
        
        
        
        return $this->render('formedeboxe/add.html.twig',[
                'formedeboxeForm' => $formedeboxeForm->createView()
                ]); 
        }

        #[Route('/edition/{id}', name: 'edit')]
        public function modifie(Formedeboxe $formedeboxe): Response
        {
            
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            return $this->render('formedeboxe/liste.html.twig',[
                'formedeboxes' => [$formedeboxe], // Passer un tableau avec l'objet Formedeboxe à la vue

            ]); 
        }

        #[Route('/suppression/{id}', name: 'supprime')]
        public function supprime(Formedeboxe $formedeboxe): Response
        {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            return $this->render('formedeboxe/liste.html.twig'); 
        }

        
    
    
    



}

