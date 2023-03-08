<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Validator\Constraints as Assert;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull()
                ]
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prénom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull()
                ]
            ])
            ->add('birthday', DateTimeType::class, [
                'attr' => [
                    'widget' => 'single_text',
                    'html5'=>false
                ],
                'label' => 'Date de naissance',
                'label_attr' => [
                    'class' => 'date_format mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull()
                ]
            ])
            ->add('login', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Pseudonyme',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull()
                ]
            ])
            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'E-mail',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull(),
                    new Assert\Email()
                ]
            ])
            ->add('password', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '6' ,
                    'maxlength' => '15'
                ],
                'label' => 'Mot de passe',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\NotNull(),
                    new Assert\Length(['min'=>6,'max'=>50])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
