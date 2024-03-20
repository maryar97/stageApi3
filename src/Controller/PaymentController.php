<?php

// src/Controller/PaymentController.php

namespace App\Controller;

use Stripe\Stripe;
use App\Entity\Commande;
use App\Entity\Formedeboxe;
use App\Service\CartService;
use Psr\Log\LoggerInterface;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session as StripeSession;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaymentController extends AbstractController
{
    private EntityManagerInterface $em;
    private UrlGeneratorInterface $generator;
    private LoggerInterface $logger;
    private CartService $cartService;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $generator, LoggerInterface $logger, CartService $cartService)
    {
        $this->em = $em;
        $this->generator = $generator;
        $this->logger = $logger;
        $this->cartService = $cartService;
    }

    #[Route('/order/create-session-stripe/{reference}', name: 'payment_stripe')]
    public function stripeCheckout($reference): RedirectResponse
    {

        $formedeboxeStripe = [];
        $total = 0;

        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

        if (!$commande) {
            $this->logger->error('Commande non trouvée.');
            return $this->redirectToRoute('app_cart');
        }

        

             //dd($commande->getRecapDetails());

            foreach ($commande->getRecapDetails() as $recapDetail) {
                // Utilisez la relation pour accéder à la Formedeboxe
                $formedeboxe = $recapDetail->getFormedeboxe();
                if ($formedeboxe) {
                $formedeboxeStripe[] = [
                    'price_data' => [
                        'currency' => 'eur',
                        'unit_amount' => (int) ($recapDetail->getPrix() * 100),
                    'product_data' => [
                        'name' => $formedeboxe->getNom(),
                    ],
                ],
                'quantity' => $recapDetail->getQuantite(),
                ];
                $total += $formedeboxe->getPrix() * $recapDetail->getQuantite();
                //dd($formedeboxeStripe);
                                //dd($total);


        //dd($formedeboxe);

            }
        } 
                    $recapDetail->setCommande($commande); // Associer le RecapDetails à la Commande
        // $this->logger->info('Articles du reca$recapDetail pour la commande de référence ' . $reference . ': ' . json_encode($formedeboxeStripe));

        Stripe::setApiKey('sk_test_51OGrEOEp0nRmZ5Z08LP6W2QIIvWXlPXk4efldJh8u1yBCm3Az3Ko8ha6o6ARFCbBvPlyrxM9SVEP5ne5EWocYIJS00CWMP336G');
        $checkout_session = Session::create([
            'customer_email' => $this->getUser()->getEmail(),
            'payment_method_types' => ['card'],
            'line_items' => $formedeboxeStripe,
            'mode' => 'payment',
            'success_url' => $this->generator->generate('payment_success', [
                'reference' => $commande->getReference()],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generator->generate('payment_error',
            ['reference' => $commande->getReference()],
            UrlGeneratorInterface::ABSOLUTE_URL
            )
            
        ]);
        $commande->setStripeSessionId((int) $checkout_session->id);        
        $this->em->flush();


        return new RedirectResponse($checkout_session->url);
    }



    #[Route('/order/success/{reference}', name: 'payment_success')]
    public function stripeSuccess(SessionInterface $session, $reference): Response
    {
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

    


        // Utilisez $commande->getStripeSessionId() pour effectuer toute opération nécessaire avec Stripe

        $session->remove('cart');
        $this->em->persist($commande);
        $this->em->flush();

        return $this->render('commande/success.html.twig');
    }

    #[Route('/order/error/{reference}', name: 'payment_error')]
    public function stripeError(SessionInterface $session, $reference): Response
    {
        // Ajoutez des logs pour comprendre si la méthode est appelée
        $this->logger->error('Erreur lors du paiement pour la commande de référence ' . $reference);

        // Vous pouvez rediriger vers une page spécifique d'erreur avec un message explicatif
        return $this->render('commande/error.html.twig');
    }
}
