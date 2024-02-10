<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use App\Service\SendMailService;
use App\Entity\User;
use App\Entity\Calendar;
use App\Form\UserType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Repository\UserRepository;

class AdminCalendarAddUserController extends AbstractController
{
    private $sendMailService;
    private $passwordEncoder;
    
    public function __construct(SendMailService $sendMailService, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->sendMailService = $sendMailService;
        $this->passwordEncoder = $passwordEncoder;
    }
    #[Route('admin/calendaradduser/{id}', name: 'admin_calendar_add_user', methods: ['GET', 'POST'])]
    public function calendarAddUser(Request $request, Calendar $calendar, $id, SendMailService $sendMailService, UserRepository $userRepository): Response
    {
        $title = $calendar->getTitle();
        $price = $calendar->getPrice();
    
        // Create the response
        $response = new Response();
    
        // Set the cookies for the title and price
        $response->headers->setCookie(new Cookie('calendarTitle', $title));
        $response->headers->setCookie(new Cookie('calendarPrice', $price));
    
        // Process the form submission
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);


    
    
        if ($form->isSubmitted() && $form->isValid()) {

            $email = $user->getEmail();


            // Check if the email already exists in the database
        $existingUser = $userRepository->findOneBy(['email' => $email]);

          if ($existingUser) {
              // If the email already exists, set newUserId to the existing user's ID
              $newUserId = $existingUser->getId();
          } else {


             // Hasher le mot de passe avant de l'enregistrer dans la base de données
             $plainPassword = $user->getPassword();
             $hashedPassword = $this->passwordEncoder->encodePassword($user, $plainPassword);
             $user->setPassword($hashedPassword);

            // Persist the user in the database
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
    
            // Set the new_user_id cookie
            $newUserId = $user->getId();
            $response->headers->setCookie(new Cookie('new_user_id', $newUserId));
    

             // Récupérer le mot de passe généré précédemment
             $password = $user->getPassword();

      // Envoyer un e-mail de confirmation avec le mot de passe non haché
      $sendMailService->send(
        'noreply@example.com',
        $user->getEmail(),
        'Confirmation de création de compte',
        'confirmation_creation_compte',
        ['user' => $user, 'password' => $plainPassword] // Utiliser le mot de passe non haché ici
    );

}
         

            return $this->redirectToRoute('admin_calendar_add_user_quantity', [
                'id' => $id,
                'newUserId' => $newUserId,
            ]);
        }
    
        // Render the form for creating a new user
        return $this->render('admin/calendar/add_user.html.twig', 
      //  return $this->render('admin/calendar/show_add_user_quantity.html.twig',
        [
            'form' => $form->createView(),
            'calendar' => $calendar,
            'title' => $title,
            'price' => $price
        ]);
    }
}