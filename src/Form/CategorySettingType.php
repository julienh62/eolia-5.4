<?php

namespace App\Form;

use App\Entity\CategorySetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

class CategorySettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titleCategorySetting')
        ->add('background_color', ColorType::class)
        ->add('border_color', ColorType::class)
        ->add('text_color', ColorType::class) 
        ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategorySetting::class,
        ]);
    }
}
