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

        
        

        
        
}

