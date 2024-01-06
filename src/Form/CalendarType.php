<?php

namespace App\Form;



use App\Entity\Staff;
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
  
           // Ensure 'clickedDate' exists and assign a default value if it doesn't
           $clickedDate = $options['clickedDate'];
         //  dd($clickedDate); 

        $builder
            ->add('title')
            ->add('start', DateTimeType::class, [
                'date_widget' => 'single_text',
                'label' => 'Start',
                'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
            ])
       
         
          //  ->add('staffs')
            ->add('end', DateTimeType::class, [
                'date_widget' => 'single_text',
                'label' => 'End',
                'data' => $clickedDate ? new \DateTime(urldecode($clickedDate)) : null, // Utiliser la valeur de 'clickedDate' pour pré-remplir le champ de date
            ])
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
            ->add('staffs')
          

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
            'clickedDate' => null, // Définir une valeur par défaut pour 'clickedDate'
        ]);
    }
}
