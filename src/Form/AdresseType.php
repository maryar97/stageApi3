<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        
        
            
            ->add('adrnom', TextType::class,[
                'label' => 'Nom'
            ])
            ->add('adrprenom', TextType::class,[
                'label' => 'Prénom'
            ])
            ->add('adresse', TextType::class,[
                'label' => 'Adresse'
            ])
            ->add('adrcp', TextType::class,[
                'label' => 'Code postal'
            ])
            ->add('adrville', TextType::class,[
                'label' => 'Ville'
            ])
            ->add('adrpays', TextType::class,[
                'label' => 'Pays'
            ])
            ->add('adrtel', TextType::class,[
                'label' => 'Téléphone'
            ])
            ->add('adremail', TextType::class,[
                'label' => 'Email'
            ])
            
            ->add('users', EntityType::class, [
                'class' => Users::class,
                'choice_label' =>'Nom'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}

