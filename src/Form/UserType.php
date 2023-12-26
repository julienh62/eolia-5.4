<?php

namespace App\Form;

use App\Entity\User;
use App\Form\UserWithQuantityType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class UserType extends AbstractType
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom complet'
            ])
            ->add('phone', TelType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Tel',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un numéro de téléphone.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^\+?\d+$/',
                        'message' => 'Veuillez entrer un numéro de téléphone valide (chiffres et optionnellement le signe +).',
                    ]),
                ],
            ])
    
         /*  pour ajouter quantity au admin adduser mais pas possible d'atteinder quantity ici qui est liée à PurchaseItem ->add('quantity', CollectionType::class, [
                'entry_type' => UserWithQuantityType::class,
                'label' => false,
                'allow_add' => true,
                'by_reference' => false,
            ]) */
    
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(), // Pour s'assurer que le champ n'est pas vide
                    new Assert\Email(),   // Pour s'assurer que la valeur est un email valide
                ],
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Mot de passe'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'empty_data' => function (FormInterface $form) {
                $user = $form->getData();
                return $this->setUserData($user, $form->get('password')->getData());
            },
        ]);
    }

    public function finishView(FormView $view, FormInterface $form, array $options): void
    {
        $view['password']->vars['value'] = $this->generateRandomPassword();
    }

    private function generateRandomPassword($length = 8)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $password;
    }

    private function setUserData(User $user, string $plainPassword): User
    {
        $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
        $user->setPassword($hashedPassword);
        return $user;
    }
}
