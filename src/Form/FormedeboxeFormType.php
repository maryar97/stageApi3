<?php

namespace App\Form;

use App\Entity\Club;
use App\Entity\Commande;
use App\Entity\Formedeboxe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormedeboxeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Nom de la forme de boxe'],
            ])
            ->add('description', null, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Description de la forme de boxe'],
            ])
            ->add('photo', FileType::class, [
                'attr' => ['class' => 'form-control form-control-file'],
                'label' => 'Photo',
                'required' => false, // à adapter selon votre besoin de validation
            ])
            ->add('prix', TextType::class, [
                'label' => 'Prix (€)',
                'attr' => ['placeholder' => 'Prix de la forme de boxe'],
            ])
            ->add('quantite', null, [
                'label' => 'Quantité',
                'attr' => ['placeholder' => 'Quantité disponible'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formedeboxe::class,
        ]);
    }
}
