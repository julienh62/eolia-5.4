<?php

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\PurchaseItem;
use App\Entity\Purchase;
use App\Entity\User;
use App\Entity\Activity;
use App\Form\UserWithQuantityType;
use App\Service\SendMailService;
use Doctrine\Persistence\ManagerRegistry;
use App\Event\PurchaseSuccessEventStock;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class AdminCalendarAddUserQuantityController extends AbstractController
{   

    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }
    
    private function isStockValid(Activity $activity, int $quantity): bool
    {

        return $activity->getStock() >= $quantity;
    }



    #[Route('/admin/calendaradduserquantity/{id}/{newUserId}',
        name: 'admin_calendar_add_user_quantity', methods: ['GET', 'POST'])]
    public function calendarAddUserQuantity(Activity $activity, Request $request,
      $id, $newUserId, SendMailService $sendMailService, EventDispatcherInterface $dispatcher): Response
    {
      //  $calendarId = $request->attributes->get('id');
        $newUserId = $request->attributes->get('newUserId');
        
        // Fetch the user and calendar entities
        $userRepository = $this->managerRegistry->getRepository(User::class);
        $user = $userRepository->find($newUserId);
        
        $initialStock = $activity->getStock();
     // dd($initialStock);
        // Calculate the isStockValid value based on your validation logic
       // $isStockValid = $this->isStockValid($calendar, $quantity);
     //   dd($isStockValid); // D

        // Verify if user and calendar entities are fetched successfully
        if (!$user || !$activity) {
            throw $this->createNotFoundException('User or Activity not found.');
        }
     


        // Create an instance of the Purchase and PurchaseItem entities
        $purchase = new Purchase();
        $purchase->setUser($user);
       // $purchase->setFullName($user->getFullName());
        

        // Get the calendar price from the fetched Calendar entity
        $activityPrice = $activity->getPrice();

      
   
        $purchaseItem = new PurchaseItem();
        $purchaseItem->setActivityPrice($activityPrice);
        $purchaseItem->setActivityName($activity->getTitle());
       // $purchaseItem->setCalendarStock($calendar->getStock()); 
        $purchaseItem->setActivity($activity);



        // Create the form
        $form = $this->createForm(UserWithQuantityType::class, $purchaseItem);
        $isStockValid = true; // Initialize the variable

        // Handle the form submission
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

      


            // Get the quantity from the form data
            $quantity = $purchaseItem->getQuantity();
//dd($quantity);
     // Calculate the isStockValid value based on your validation logic
     $isStockValid = $this->isStockValid($activity, $quantity);
  //   dd($isStockValid);

            // Update the PurchaseItem entity with the quantity
            $purchaseItem->setQuantity($quantity);

             // Calcul du total
             $total = $activityPrice * $quantity;
//dd($total);
           // $purchase->setTotal($total);

            $purchaseItem->setTotal($total);
        //   dd($purchase);            //  dd($total);
                  // Associez le montant total au Purchase
            //      $purchase->setTotal($total);

            // Associate the purchase item with the purchase
            $purchaseItem->setPurchase($purchase);
          // dd($purchaseItem);
           
         //   dd($purchase);
            //  the purchase item to the purchase
            $purchase->addPurchaseItem($purchaseItem);

                    //Lancer un evnmnt qui permet
        // de decrementer le stock de produit
        // purchase.successStock est le nom donné à l'evnmnt (dossier Event)
        $purchaseEventStock = new PurchaseSuccessEventStock($purchase);
        $dispatcher->dispatch($purchaseEventStock, 'purchase.successStock');





            // Persist the entities to the database
            $entityManager = $this->managerRegistry->getManager();
            $entityManager->persist($purchase);
            $entityManager->persist($purchaseItem);
           // $entityManager->persist($calendar);
            $entityManager->flush();

             // Envoyer un e-mail de confirmation avec le mot de passe non haché
             $sendMailService->send(
                'noreply@example.com',
                $user->getEmail(),
                'Lien de paiement',
                'lien_payment',
                ['user' => $user, 'purchase' => $purchase]
            );



            // Redirect the user after successful form submission
            return $this->redirectToRoute('app_admin_agenda');
        }

        // Render the form template with the form data
        return $this->render('admin/calendar/add_user_quantity.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
            'activity' => $activity,
           'isStockValid' => $isStockValid,
        ]);
    }
}
