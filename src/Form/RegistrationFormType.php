<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'E-mail'
            ])
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nom'
            ])
            ->add('prenom', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Prénom'
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Autre' => 'Autre',
                ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Sexe',
            ])
            ->add('datenaiss', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Date de naissance'
            ])
            ->add('adresse', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Adresse'
            ])
            ->add('codepostal', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Code postal'
            ])
            ->add('ville', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Ville'
            ])
            ->add('pays', ChoiceType::class, [
                'choices' => $this->getPays(),
                'attr' => ['class' => 'form-control'],
                'label' => 'Pays',
            ])
            ->add('telephone', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Téléphone'
            ])
            ->add('formedeboxe', ChoiceType::class, [
                'choices' => [
                    'Bea' => 'Bea',
                    'Amateur' => 'Amateur',
                    'Pro' => 'Pro',
                    'Aeroboxe' => 'Aeroboxe',
                ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Forme de boxe'
            ])
            ->add('photo', FileType::class, [
                'attr' => ['class' => 'form-control form-control-file'],
                'label' => 'Photo',
                'required' => false, // à adapter selon votre besoin de validation
            ])
            ->add('RGPDConsent', CheckboxType::class, [
                'mapped' => false,
                'label' => 'En m\'inscrivant à ce site j\'accepte...',
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'form-control'],
                'label' => 'Mot de passe'
            ]);
    }

    private function getPays(): array
    {
        $pays = \Symfony\Component\Intl\Countries::getNames();
        asort($pays);

        return array_flip($pays);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
