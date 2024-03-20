<?php

namespace App\Controller;

use App\Repository\LicenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LicenceController extends AbstractController
{
    #[Route('/licence', name: 'app_licence')]
    public function index(LicenceRepository $licenceRepository): Response
    {
        $licence = $licenceRepository->findBy([], ['licence' => 'asc']);

        return $this->render('licence/index.html.twig', compact ('licence'));
    }
}
