<?php

namespace App\Form;

use App\Entity\StaffSchedule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class StaffScheduleType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder,$options);
        $clickedDate = $options['clickedDate'] ?? null; // Récupération de la valeur passée

        $builder
        ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'Start',
            'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'End',
            'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
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
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StaffSchedule::class,
            'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'

        ]);
    }
}
