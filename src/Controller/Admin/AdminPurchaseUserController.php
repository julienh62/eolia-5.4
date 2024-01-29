<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\PurchaseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminPurchaseUserController extends AbstractController
{

    #[Route('admin/purchase/user/{id}', name: 'admin_user_purchase', methods: ['GET'])]
    public function index(User $user, $id, PurchaseRepository $PurchaseRepository)
    {
        

       // recuper l'id
          $fullName = $user->getFullName();
        //dd($fullName);

        $listpurchase = $PurchaseRepository->findAllPurchaseUser($fullName);
        $purchases = []; // Tableau pour stocker toutes les commandes
       //dd($listpurchase);

        foreach ($listpurchase as $purchase) {
            $start = $purchase['start'];
            $end = $purchase['end'];
            $title = $purchase['title'];
            $quantity = $purchase['quantity'];
            $total = $purchase['total'];
            $status = $purchase['status'];
          //  $created_at = $purchase['created_at'];

            // Ajouter les valeurs de chaque commande au tableau $purchases
            $purchases[] = [
                'start' => $start,
                'end' => $end,
                'title' => $title,
               'quantity' => $quantity,
               'total'  =>  $total,
           //    'created_at' => $created_at,
               'status' => $status
            ];
        }
        
        return $this->render('admin/user/show_purchase.html.twig', [
            'purchases' => $purchases,
            'user' => $user,
        ]);

    }
}

