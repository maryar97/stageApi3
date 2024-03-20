<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Entity\Formedeboxe;
use App\Entity\RecapDetails;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    
    private EntityManagerInterface $em;

    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em ;

    
    }
    #[Route('/order-create', name: 'order_create')]
    public function index(CartService $cartService): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_connexion');
        }

        $form = $this->createForm(CommandeType::class, data: null,options: [
            'user' => $this->getUser()
        ]);
        
        return $this->render('commande/index.html.twig', [
            'form' => $form->createView(),
            'recapCart' => $cartService->getTotal()
        ]);
    }
    #[Route('/order-verify', name: 'order_prepare', methods: ['POST'])]
public function prepareOrder(SessionInterface $session, CartService $cartService, Request $request): Response
{
    if (!$this->getUser()) {
        return $this->redirectToRoute('app_connexion');
    }

    $form = $this->createForm(CommandeType::class, null, [
        'user' => $this->getUser(),
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $datetimeimmutable = new \DateTimeImmutable('now');
        $commande = new Commande();
        $user = $this->getUser(); // Pas besoin de trouver l'utilisateur par son ID, car vous avez déjà l'utilisateur connecté
        $commande->setUser($user);
        $datetimeimmutable = new \DateTimeImmutable(); // crée une instance avec la date et l'heure actuelles
        $reference = $datetimeimmutable->format('dmy') . '-' . uniqid();
        $commande->setUser($this->getUser());
        $commande->setReference($reference);
        $commande->setCreatedAt($datetimeimmutable);
        $commande->setIsPaid('bool');  // Vous pouvez initialiser cela à false
        $commande->setMethode('stripe');

         $total = 0; // Initialisez le total du panier à 0
        //dd($commande);
        foreach ($cartService->getTotal() as $formedeboxe) {
            $recapDetails = new RecapDetails();
            $recapDetails->setQuantite($formedeboxe['quantite']);
            $prix = $formedeboxe['formedeboxe']->getPrix();  
            $recapDetails->setPrix($prix);          // Récupérez ou créez une instance de Formedeboxe
            $commande->addRecapDetail($recapDetails); // Utilisez la méthode addRecapDetail pour associer le RecapDetails à la Commande
            $totalRecap = $prix * $formedeboxe['quantite'];
            $recapDetails->setTotalRecap($totalRecap);
            $recapDetails->setCommande($commande); // Assurez-vous d'associer le RecapDetails à la Commande
            $recapDetails->setFormedeboxe($formedeboxe['formedeboxe']); // Assurez-vous d'associer le Formedeboxe au RecapDetails
            $this->em->persist($recapDetails);
            //dd($formedeboxe);
            $total += $totalRecap;
            //dd($total);
    }
        
        $commande->setTotal($total);
                //dd($commande);

                $this->em->persist($commande);
                $this->em->flush();
                //dd($commande->getId()); // Vérifiez si l'ID est généré ici

    
        // Après avoir récupéré la commande depuis la base de données

        return $this->render('commande/recap.html.twig', [
            'commande' => $commande,
            'total' => $total,
            'methode' => $commande->getMethode(),
            'recapCart' => $cartService->getTotal(),
            'reference' => $commande->getReference(),
        ]);
    }

    return $this->redirectToRoute('app_cart');
}

}