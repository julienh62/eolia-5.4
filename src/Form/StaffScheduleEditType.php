<?php

namespace App\Form;

use App\Entity\StaffSchedule;
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
