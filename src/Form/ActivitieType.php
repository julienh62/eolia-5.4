<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Activitie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitieType extends CalendarType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder,$options);
       
        $builder
            ->add('stock')
            ->add('price')
            ->add('modifiedPrice')
    ;
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activitie::class,
        ]);
    }
}
