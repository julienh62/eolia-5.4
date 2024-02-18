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

class ActivityType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        parent::buildForm($builder,$options);
        $clickedDate = $options['clickedDate'] ?? null; // Récupération de la valeur passée
        $builder
       ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'Start',
            'data' => $clickedDate ? new \DateTime(($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text',
            'label' => 'End',
            'data' => $clickedDate ? new \DateTime(($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
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
           'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'

        ]);
    }
}
