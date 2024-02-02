<?php

namespace App\Controller\Admin;

use App\Entity\PurchaseItem;
use App\Repository\PurchaseItemRepository;
use App\Repository\PurchaseRepository;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


    #[Route('admin/')]
    class AdminUserShowController extends AbstractController
    {
    
        #[Route('usershow', name: 'app_showusers',  methods: ['GET'])]
        public function index(UserRepository $userRepo): Response
        {
            // Fetch user data from the repository
            $users = $userRepo->findAll();
    
            return $this->render('admin/admin_user/show/index.html.twig', [
                'users' => $users
            ]);
    
          
        }
    
    
        #[Route('usershowall/{fullName}', name: 'all_user_show')]
        public function showUser(User $user): Response
        {
            // Récupérez tous les purchases associés à ce user
        $purchases = $user->getPurchases();
    
        return $this->render('admin/admin_user/show/purchaseuser.html.twig', [
            'user' => $user,
            'purchases' => $purchases,
        ]);
        }
    
    
    #[Route('useridshowall/{id}', name: 'all_userid_show')]
        public function showUserId(User $user, $id,SendMailService $sendMailService, PurchaseRepository $purchaseRepository): Response
        {
    
         $fullName = $user->getFullName();
        //dd($fullName);
            $id = $user->getId();
    
       $listpurchase = $purchaseRepository->findAllPurchaseUser($fullName);
       //dd($listpurchase);
    
    
         $purchases = []; // Tableau pour stocker toutes les commandes
       //dd($listpurchase);
    
         foreach ($listpurchase as $purchase) {
             $start = $purchase['start'];
             $fullName = $purchase['fullName'];
             $end = $purchase['end'];
             $title = $purchase['title'];
             $quantity = $purchase['quantity'];
             $total = $purchase['total'];
             $status = $purchase['status'];
            // $createdAt = $purchase['createdAt'];
             $purchaseitemId = $purchase['id'];
    
             // Loop through the PurchaseItems to collect calendar IDs
    
             // Ajouter les valeurs de chaque commande au tableau $purchases, including calendar IDs
             $purchases[] = [
                 'start' => $start,
                 'fullName' => $fullName,
                 'end' => $end,
                 'title' => $title,
                 'quantity' => $quantity,
                 'total' => $total,
                // 'created_at' => $createdAt,
                 'status' => $status,
                 'id' => $purchaseitemId, // Include the purchase IDs
             ];
    
    
    
         }
    
         return $this->render('admin/admin_user/show/purchaseuserid.html.twig', [
             'purchases' => $purchases,
             'fullname' => $fullName,
             'id' => $id
         ]);
    
    
    }
        //envoi lien de paiement via id de la purchase
        #[Route('/admin/calendarshowlienpaiement/{purchaseId}/{id}',
            name: 'admin_calendar_show_lien_paiement', methods: ['GET', 'POST'])]
        public function SendLienPayment(User $user,PurchaseRepository $purchaseRepository, Request $request,
           $id, $purchaseId, SendMailService $sendMailService): Response
        {
    
    
            $fullName = $user->getFullName();
            //dd($fullName);
            $purchaseList = $purchaseRepository->findAllPurchaseUser($fullName);
    
            foreach ($purchaseList as $purchase) {
    
                $purchaseitemId = $purchase['id'];
    
                // Loop through the PurchaseItems to collect calendar IDs
    
                // Ajouter les valeurs de chaque commande au tableau $purchases, including calendar IDs
                $purchases[] = [
                    'id' => $purchaseId, // Include the purchase IDs
                ];
                $email = $user->getFullName();
                // Envoyer un e-mail de confirmation avec le mot de passe non haché
                $sendMailService->send(
                    'noreply@example.com',
                    $user->getEmail(),
                    'Lien de paiement',
                    'renvoyer_lien_payment',
                    ['user' => $user, 'purchaseId' => $purchaseId]
                );
    //dd($purchaseId);
                // Redirect the user after successful form submission
                return $this->redirectToRoute('app_admin_agenda');
            }
        }
    }
    