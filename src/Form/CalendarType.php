<?php

namespace App\Form;




use App\Entity\Staff;
use App\Entity\Category;
use App\Entity\Calendar;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;



class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    
          $builder
              ->add('title')
              ->add('start', DateTimeType::class, [
                'date_widget' => 'single_text',
                'label' => 'Starts',
           
            ])
              ->add('end', DateTimeType::class, [
                 'date_widget' => 'single_text',
                  'label' => 'End',
              ])  
             
              ->add('staffs', EntityType::class, [
                'class' => Staff::class,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'fullName',
                'attr' => [
                    'class' => 'calendarform' // Ajout de la classe CSS 'calendarform'
                ]
            ])
        
            ->add('category')
          

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
            'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'
        ]);
    
        // Ajouter l'option 'clickedDate' pour ActivityType
        $resolver->setDefined(['clickedDate']);
    }
}