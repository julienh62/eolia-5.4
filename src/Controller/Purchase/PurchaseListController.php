<?php

namespace App\Controller\Purchase;

use App\Entity\User;
use App\Entity\PurchaseItem;
use App\Repository\PurchaseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PurchaseListController extends AbstractController
{

 

// ...
     /**
     * @Route("/purchase", name="app_purchase")
     * @IsGranted ("ROLE_USER", message ="Vous devez être connecté pour  accéder vos commandes" )
     */
    public function index(PurchaseRepository $purchaseRepository)
    {
           //il faut verifier que le user est bien connecté
        //grace à la classe security
        /** @var User */
       $user = $this->getUser();

       // recuper l'id
        $fullName = $user->getFullName();
       //dd($fullName);

       $listpurchase = $purchaseRepository->findAllPurchaseUser($fullName);
       $purchases = []; // Tableau pour stocker toutes les commandes
      //dd($listpurchase);

        foreach ($listpurchase as $purchase) {
            $start = $purchase['start'];
            $start = $purchase['start'];
            $end = $purchase['end'];
            $title = $purchase['title'];
            $quantity = $purchase['quantity'];
            $total = $purchase['total'];
            $status = $purchase['status'];
          //  $created_at = $purchase['created_at'];
            $activitieIds = $purchase['id'];


            

           

            // Loop through the PurchaseItems to collect Activity IDs
       

            // Ajouter les valeurs de chaque commande au tableau $purchases, including Activity IDs
            $purchases[] = [
                'start' => $start,
                'end' => $end,
                'title' => $title,
                'quantity' => $quantity,
                'total' => $total,
              //  'created_at' => $created_at,
                'status' => $status,
                'activitieIds' => $activitieIds, // Include the Activity IDs
            ];
        }

        return $this->render('purchase/index.html.twig', [
            'purchases' => $purchases,
            'fullname' => $fullName
        ]);

    // ...
}





}

