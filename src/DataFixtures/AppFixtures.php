<?php

namespace App\DataFixtures;

use App\Entity\Club;
use App\Entity\Users;
use App\Entity\Adresse;
use App\Entity\Licence;
use App\Entity\Commande;
use App\Entity\Formedeboxe;
use App\Entity\RecapDetails;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $hasher;

        public function __construct(UserPasswordHasherInterface $hasher)
        {
                $this->hasher = $hasher;
        }
    public function load(ObjectManager $manager): void
    {
        $users1 = new Users();
        $users1->setnom('dupont')
        ->setprenom('marie');
        $password = $this->hasher->hashPassword($users1, "Afpa1234");
        $users1->setPassword($password)
        ->setsexe('f')
        ->setEmail('mdupont@gmail.com')
        ->setadresse('1 rue du chemin')
        ->setDatenaiss(new \DateTime('06/04/1967'))
        ->setcodepostal('80567')
        ->setville('capville')
        ->setPays('France')
        ->settelephone('0697986575')
        ->setphoto('1.jpg')
        ->setCreatedAt(new \DateTimeImmutable())
        ->setformedeboxe('boxe_educative')
        ->setIsVerified(true) // Définissez is_verified sur true
        ->setRoles(['ROLE_USER']);
        $manager->persist($users1);

        $users2 = new Users();
        $users2->setNom('duche')
            ->setPrenom('eric')
            ->setEmail('edu@gmail.com') // Assurez-vous d'ajouter un point-virgule ici
            ->setPassword($this->hasher->hashPassword($users2, "Afpa1234")) // Utilisez $users2 ici
            ->setSexe('h')
            ->setAdresse('1 avenue de grece ')
            ->setDatenaiss(new \DateTime('06/04/1992'))
            ->setCodepostal('80987')
            ->setVille('villers')
            ->setPays('France')
            ->setTelephone('0607059876')
            ->setPhoto('3.pjg')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsVerified(true) // Définissez is_verified sur true
            ->setRoles(['ROLE_USER'])
            ->setFormedeboxe('aeroboxe');
        $manager->persist($users2);

        $users3 = new Users();
        $users3->setnom('poisson')
        ->setprenom('paul')
        ->setPassword($this->hasher->hashPassword($users2, "Afpa1234")) // Utilisez $users2 ici
        ->setsexe('m')
        ->setEmail('ppaul@gmail.com')
        ->setadresse('1 rue colvert')
        ->setDatenaiss(new \DateTime('01/03/1987'))
        ->setcodepostal('80867')
        ->setville('amiens')
        ->setPays('France')
        ->settelephone('0897986578')
        ->setphoto('2.jpg')
        ->setCreatedAt(new \DateTimeImmutable())
        ->setformedeboxe('boxe_educative')
        ->setIsVerified(true) // Définissez is_verified sur true
        ->setRoles(['ROLE_ADMIN']);
        $manager->persist($users3);

         // Création des licences
         $licence = new Licence();
         $licence->setCreatedAt(new \DateTimeImmutable())
             ->setNomlicence('amateur');
         $licence->addUser($users1); // Correction de la variable
         $manager->persist($licence);
         $licence2 = new Licence();
         $licence2->setCreatedAt(new \DateTimeImmutable())
             ->setNomlicence('professionnelle');
         $licence2->addUser($users2); // Correction de la variable
         $manager->persist($licence2);
 

        // $users4 = new Users();
        // $users4->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('h')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('4.jpg')
        // ->setRoles(['ROLE_USER'])
        // ->setformedeboxe('');
        // $manager->persist($users4);


        // $users5 = new Users();
        // $users5->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users5);


        // $users6 = new Users();
        // $users6->setnom('')
        // ->setprenom('')
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users6);


        // $users7 = new Users();
        // $users7->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users7);


        // $users8 = new Users();
        // $users8->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users8);


        // $users9 = new Users();
        // $users9->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users9);


        // $users10 = new Users();
        // $users10->setnom('')
        // ->setprenom('')
        // ->setPassword(password_hash('password', PASSWORD_DEFAULT))
        // ->setsexe('')
        // ->setemail('')
        // ->setadresse('')
        // ->setDatenaiss('')
        // ->setcodepostal('')
        // ->setville('')
        // ->settelephone('')
        // ->setphoto('')
        // ->setformedeboxe('');
        // $manager->persist($users10);


        


        
            
        $Formedeboxe1 = new Formedeboxe();
        $Formedeboxe1->setNom('boxe educative')
        ->setDescription('boxe avec coup  non porté')
        ->setPrix(150)
        ->setQuantite(15)
        ->setPhoto('logoa.png');
        $manager->persist($Formedeboxe1);

        $Formedeboxe2 = new Formedeboxe();
        $Formedeboxe2->setNom('boxe amateur')
        ->setDescription('boxe avec coup porté avec casque')
        ->setPrix(150)
        ->setQuantite(15)
        ->setPhoto('logob.png');
        $manager->persist($Formedeboxe2);

        $Formedeboxe3 = new Formedeboxe();
        $Formedeboxe3->setNom('boxe pro')
        ->setDescription('boxe sans casque bandage dur')
        ->setPrix(150)
        ->setQuantite(15)

        ->setPhoto('logodc.png');
        $manager->persist($Formedeboxe3);

        $Formedeboxe4 = new Formedeboxe();
        $Formedeboxe4->setNom('aeroboxe')
        ->setDescription('choregraphie gestuelle boxe')
        ->setPrix(150)
        ->setQuantite(15)
        ->setPhoto('logod.png');
        $manager->persist($Formedeboxe4);

        $club = new Club();
        $club->setNom('amiens bc')
        ->setAdresse('rue du moulin neuf ')
        ->setCodepostal('80000')
        ->setTelephone('0626259768')
        ->setEmail('jeromefouache@msn.com')
        ->setLogo('logoclub.jpg')
        ->setVille('Amiens')
        ->setPays('France');
        $manager->persist($club);




        $commande = new Commande(); 
        $commande->setIsPaid(true)
        ->setMethode('Carte de crédit')
        ->setStripeSessionId('1')
        ->setCreatedAt(new \DateTimeImmutable())
        ->setReference('CMD123')
        ->setTotal(1)
        ->setFormedeboxe($Formedeboxe1);
        // $commande->setUsers($users);
        $adresse = $manager->getRepository(Adresse::class)->findOneBy(['Adresse' => 'votre_adresse']);
        if (!$adresse) {
    // Créez une nouvelle adresse si elle n'existe pas déjà
        $adresse = new Adresse();
        $adresse->setAdresse('')
            ->setAdrCp('')
            ->setAdrVille('')
            ->setAdrPays('');
            $manager->persist($adresse);

            $recapDetails = new RecapDetails();
            $recapDetails->setQuantite(1)
            ->setPrix(150)
            ->setTotalRecap('1')
            ->setCommande($commande);
            // ->setFormedeboxe('');
}
            // $commande->setAdresse($adresse); // Associez l'adresse à la commande
        // $users->addAdresse($adresse); // Assurez-vous que l'utilisateur est le bon (ici $users3)
        $manager->persist($commande);
        $manager->flush();
    }
}