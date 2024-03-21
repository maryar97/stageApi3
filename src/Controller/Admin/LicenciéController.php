<?php

namespace App\Controller\Admin;

use App\Entity\Licence;
use App\Form\LicenceFormType;
use App\Repository\UsersRepository;
use App\Repository\LicenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
public function creerLicence(Request $request, UserInterface $user, UsersRepository $userRepository): Response
{
    // Vérifier si un utilisateur est connecté
    if (!$user) {
        // Gérer le cas où aucun utilisateur n'est connecté
        throw $this->createNotFoundException('Aucun utilisateur connecté.');
    }
    
    // Créer une nouvelle licence associée à l'utilisateur connecté
    $licence = new Licence();
    $licence->setCreatedAt(new \DateTimeImmutable()) // Date fictive à titre d'exemple
            ->setNomlicence('')
            ->addUser($user); // Associer la licence à l'utilisateur connecté
    
    // Récupérer tous les utilisateurs depuis la base de données
    $users = $userRepository->findAll();
    
    // Créer le formulaire en utilisant LicenceFormType et passer la liste des utilisateurs au formulaire
    $form = $this->createForm(LicenceFormType::class, $licence, ['users' => $users]);
    
    // Gérer la soumission du formulaire
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer la licence en base de données
        $this->entityManager->persist($licence);
        $this->entityManager->flush();
        
        // Ajouter un message flash de succès
        $this->addFlash('success', 'Licence créée avec succès pour l\'utilisateur sélectionné : ' . $user->getNom());
        
        // Rediriger l'utilisateur vers une autre page (par exemple, la liste des licenciés)
        return $this->redirectToRoute('admin_licenciés_index');
    }

    // Afficher le formulaire dans le template Twig
    return $this->render('admin/licenciés/creer.html.twig', [
        'form' => $form->createView(),
    ]);
}
#[Route('/suppression/{id}', name: 'supprimer')]
        public function supprimer(Licence $licence, Request $request, EntityManagerInterface $em, UserInterface $user, UsersRepository $userRepository): Response
        {
            $licence->setCreatedAt(new \DateTimeImmutable()) // Date fictive à titre d'exemple
                    ->addUser($user); // Associer la licence à l'utilisateur connecté
            
            // Récupérer tous les utilisateurs depuis la base de données
            $users = $userRepository->findAll();
            
            $Form = $this->createForm(LicenceFormType::class, $licence, ['users' => $users]);
        
            // Traiter la soumission du formulaire
            $Form->handleRequest($request);
        
            // Vérifier si le formulaire est soumis et valide
            if ($Form->isSubmitted() && $Form->isValid()) {
                // Supprimer l'entité
                $em->remove($licence);
                $em->flush();
        
                $this->addFlash('success', 'Forme de boxe supprimée avec succès');
        
                // Rediriger vers la liste des formes de boxe après la suppression
                return $this->redirectToRoute('admin/licenciés/index');
            }
        
            return $this->render('admin/licenciés/supprimer.html.twig', [
                'form' => $Form->createView(),
                'licence' => $licence,
            ]);
        }

}