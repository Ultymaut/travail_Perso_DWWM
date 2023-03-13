<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



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
            ->add('birthday', DateType::class, [
                'attr' => [

                ],
                'widget' => 'single_text',
                'html5'=>true,
                'label' => 'Date de naissance ',
                'label_attr' => [
                    'class' => 'date_format mt-5 pt-3'
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
            ->add('password', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '6' ,
                ],
                'hash_property_path' => 'password',
                    'mapped' => false,
                'label' => 'Mot de passe',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'constraints' => [
                    new Assert\Length(['min'=>6])
                ]
            ])

            ->add('submit' , SubmitType::class, [
                'attr' => [
                'class' => 'btn btn-outline-primary mt-4'
            ],
                'label' => 'Valider'
            ])
         ;
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
