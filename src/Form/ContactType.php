<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [new NotBlank()],
                'attr' => [
                    'class' => 'form-control', // Ajoutez la classe Bootstrap form-control
                ],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [new NotBlank()],
                'attr' => [
                    'class' => 'form-control', // Ajoutez la classe Bootstrap form-control
                ],
            ])
            ->add('message', TextareaType::class, [
                'constraints' => [new NotBlank()],
                'attr' => [
                    'class' => 'form-control', // Ajoutez la classe Bootstrap form-control
                ],
            ])
       
            ->add('envoyer', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-primary', // Ajoutez la classe Bootstrap pour un bouton de couleur bleue
                ],
            ]);
    }
}
