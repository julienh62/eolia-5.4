<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\Image;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titleCategory');

        // Écouteur d'événements pour ajouter dynamiquement le champ d'image si l'activité est vraie
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $category = $event->getData();

            if ($category instanceof Category && $category->isActivity() === true) {
                $form->add('image', FileType::class, [
                    'label' => 'Image',
                    'mapped' => false,
                    'required' => false,
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Please upload an image file',
                        ]),
                        new Image([
                            'maxSize' => '5M',
                            'maxWidth' => 1600,
                            'maxHeight' => 700,
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image (JPEG or PNG) file',
                            'notFoundMessage' => 'The image file could not be found',
                            'notReadableMessage' => 'The image file could not be read',
                        ]),
                    ],
                ]);
            }
        });

        // Ajout du champ d'activité
        $builder->add('activity', CheckboxType::class, [
            'required' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
