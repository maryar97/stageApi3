<?php

namespace App\Form;

use App\Entity\Formedeboxe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            ->add('prix', TextType::class, [
                'label' => 'Prix (€)',
                'attr' => ['placeholder' => 'Prix de la forme de boxe'],
            ])
            ->add('quantite', null, [
                'label' => 'Quantité',
                'attr' => ['placeholder' => 'Quantité disponible'],
            ]);

        // Ajouter le champ photo conditionnellement
        if (!$options['data']->getPhoto()) {
            $builder->add('photo', FileType::class, [
                'attr' => ['class' => 'form-control form-control-file'],
                'label' => 'Photo',
                'required' => false,
            ]);
        } else {
            // Sinon, ajouter le champ photo en tant que champ TextType pour la modification
            $builder->add('photo', TextType::class, [
                'label' => 'Photo',
                'attr' => ['placeholder' => 'Chemin de la photo'],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formedeboxe::class,
        ]);
    }
}
