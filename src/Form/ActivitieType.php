<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Activitie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ActivitieType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
         // Ensure 'clickedDate' exists and assign a default value if it doesn't
     //    $clickedDate = $options['clickedDate'];
        // dd($clickedDate); 
        parent::buildForm($builder,$options);
       
        $builder
    /*    ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'Start',
            'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'End',
            'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
        ])*/
            ->add('stock')
            ->add('price')
            ->add('modifiedPrice')
    ;
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activitie::class,
            'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'
        ]);
    }
}
