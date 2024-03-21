<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Licence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class LicenceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomlicence', null, [
            'label' => 'Nom de la licence',
            'attr' => ['placeholder' => 'Entrer le nom de la licence'],
        ])            // Utilisez un champ EntityType pour sélectionner un utilisateur
            ->add('users', EntityType::class, [
                'class' => Users::class,
                'choices' => $options['users'],
                'choice_label' => 'nom', // Modifier selon le champ que vous souhaitez afficher
                'multiple' => true, // Permettre la sélection de plusieurs utilisateurs
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
