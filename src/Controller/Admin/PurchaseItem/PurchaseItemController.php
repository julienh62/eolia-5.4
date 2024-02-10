<?php

namespace App\Controller\Admin\PurchaseItem;

use App\Entity\PurchaseItem;
use App\Repository\PurchaseItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PurchaseItemController extends AbstractController
{
    #[Route('/admin/purchaseitem', name: 'app_purchase_item')]
    public function index(PurchaseItemRepository $purchaseItemRepository): Response
    {
        $purchaseItems = $purchaseItemRepository-> findAll(); 
      // dd($purchaseItems);

      
     

        return $this->render('admin/purchase_item/index.html.twig', [
            'purchaseItems' => $purchaseItems,
        ]);
    }
    
    #[Route('/admin/purchaseitemdelete/{id}', name: 'delete_purchaseitem')]
     public function delete( PurchaseItem $purchaseItem,$id ,
     PurchaseItemRepository $purchaseItemRepository, EntityManagerInterface $em): Response
    {
         // Récupérer la quantité associée à l'élément de commande
        $quantityPurchase = $purchaseItem->getQuantity();   
        //dd($quantityPurchase);

        //recuperer le stock du calendar
        $calendarPurchaseStock = $purchaseItem->getActivity()->getStock();
        //dd($calendarPurchaseStock);

        // Calculer le nouveau stock du calendrier après la suppression de cet achat
        $newCalendarStock = $calendarPurchaseStock + $quantityPurchase;

        // Mettre à jour le stock du calendrier avec la nouvelle valeur
        $purchaseItem->getActivity()->setStock($newCalendarStock);

        $em->flush();

        $purchaseItemRepository->remove($purchaseItem, true);
       // dd($purchaseItems);
       return $this->redirectToRoute('app_purchase_item', [], Response::HTTP_SEE_OTHER);
    }
}
