<?php

namespace App\Form;

use App\Entity\StaffSchedule;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class StaffScheduleEditType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder,$options);

        $builder
        ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'Start',
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'End',
        ])
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'query_builder' => function (CategoryRepository $er) { // CategoryRepository
                return $er->createQueryBuilder('c')
                    ->andWhere('c.activity = :activity')
                    ->setParameter('activity', false);
            },
            'choice_label' => 'titleCategory',
            'label' => 'Catégorie',
        ]);  
        ;    
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StaffSchedule::class,
            'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'

        ]);
    }
}
