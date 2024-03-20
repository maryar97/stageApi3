<?php

namespace App\Controller\Admin;

use App\Entity\Licence;
use App\Repository\LicenceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin/licenciés', name: 'admin_licenciés_')]
class LicenciéController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'index')]
    public function index(LicenceRepository $licenceRepository): Response
    {
        // Récupérer toutes les licences avec les utilisateurs associés
    $licences = $licenceRepository->findAllWithUsers();

    return $this->render('admin/licenciés/index.html.twig', [
        'licences' => $licences,
    ]);
    }
    
    #[Route('/creer', name: 'creer')]
    public function creerLicence(UserInterface $user): Response
    {
        // Vérifier si un utilisateur est connecté
        if (!$user) {
            // Gérer le cas où aucun utilisateur n'est connecté
            throw $this->createNotFoundException('Aucun utilisateur connecté.');
        }
        
        // Créer une nouvelle licence associée à l'utilisateur connecté
        $licence = new Licence();
        $licence->setCreatedAt(new \DateTimeImmutable()) // Date fictive à titre d'exemple
                ->setNomlicence('amateur')
                ->addUser($user); // Associer la licence à l'utilisateur connecté
        
        // Enregistrer la licence en base de données
        $this->entityManager->persist($licence);
        $this->entityManager->flush();
        
        // Ajouter un message flash de succès
    $this->addFlash('success', 'Licence créée avec succès pour l\'utilisateur connecté : ' . $user->getPrenom());
    
    // Rediriger l'utilisateur vers une autre page (par exemple, la liste des licenciés)
    return $this->redirectToRoute('admin_licenciés_index');
}
}
