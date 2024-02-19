<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\Activity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ActivityEditType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        parent::buildForm($builder,$options);
        $clickedDate = $options['clickedDate'] ?? null; // Récupération de la valeur passée
        $builder
       ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'Start',
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'End',
        ])  
            ->add('stock')
            ->add('price', MoneyType::class, [
                'label' => 'Prix de la seance',
                'constraints' => [
                    new NotBlank()
                ],
                'attr' => [
                   // 'class' =>'form-control',
                    'placeholder' =>'Prix de la séance'
                ],
                'divisor' => 100
            ])
          //  ->add('modifiedPrice')
    ;
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activity::class,

        ]);
    }
}
