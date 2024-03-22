<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Licence;
use App\Entity\Formedeboxe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LicenceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomlicence', ChoiceType::class, [
            'label' => 'Nom de la licence',
            'choices' => [
                // Remplacez les clés et les valeurs par les noms de licences réels depuis votre base de données
                'Amateur' => 'Amateur',
                'Professionnelle' => 'Professionnelle',
                'Aeroboxe' => 'Aeroboxe',
                'Educative' => 'Educative',

                // Ajoutez d'autres licences si nécessaire
            ],
            'placeholder' => 'Choisissez une licence', // Optionnel : un libellé par défaut pour le menu déroulant
        ])        // Utilisez un champ EntityType pour sélectionner un utilisateur
        ->add('users', EntityType::class, [
            'class' => Users::class, // Entité associée au champ
            'choices' => $options['users'], // Choix possibles pour le champ
            'choice_label' => 'nom', // Champ de l'entité à afficher dans le menu déroulant
            'multiple' => true, // Permettre la sélection de plusieurs utilisateurs
            'attr' => ['class' => 'form-select'], // Ajouter des classes CSS au champ si nécessaire
            // Autres options de formulaire
        ]);

            // ->add('createdAt', null, [
            //     'label' => 'Date de creation',
            //     'attr' => ['placeholder' => 'Nom de la forme de boxe'],
            // ])
            
            // Ajoutez d'autres champs de formulaire si nécessaire
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Licence::class,
            'users' => [], // Option pour passer la liste des utilisateurs
        ]);
    }
}
