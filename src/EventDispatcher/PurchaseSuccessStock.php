<?php

namespace App\EventDispatcher;


use App\Repository\ActivityRepository;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\User;
use App\Event\PurchaseSuccessEventStock;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;


class PurchaseSuccessStock implements EventSubscriberInterface
{
    protected $security;
    protected $em;
    protected $flashBag;

    public function __construct(Security $security, EntityManagerInterface $em,FlashBagInterface $flashBag)
    {
        $this->security = $security;
        $this->em = $em;
        $this->flashBag = $flashBag;

    }
   public static function getSubscribedEvents() :array
    {
      //je dis au dispatcher ; à tout moment si tu reçois 
      //l'évnmnt purchase.successstock alors tu appelles  calculStock
       return [
         'purchase.successStock' => 'calculStock'
       ];
    }
   public function calculStock(PurchaseSuccessEventStock $purchaseSuccessEventStock)
   {
     // je recupere la quantité commandée par le client
     $quantityPurchase = $purchaseSuccessEventStock->getPurchase()
        ->getPurchaseItems()->getValues()[0]->getQuantity();
   //dd($quantityPurchase);
      // decrementer stock
     // $recupStock = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getActivity()->getStock();
     // dd(recupStock);
      //je récupere le stock du produit concerné par la commande
   $recupStock = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getActivity()->getStock();
      // $recupStock = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0];
   //  dd($recupStock);

   // calcul du nouveaustock : je soustraie la quantité demandée  du stock
     $newStock = $recupStock - $quantityPurchase;
   //dd($newStock);

     // Ensure new stock is not less than zero
   //  if ($newStock < -1) {
      // Handle the case where stock goes negative (e.g., throw an exception or log a message)

   //   $this->flashBag->add('danger', 'Le stock n est plus disponible');

       // Throw an exception to stop the procedure
 //   throw new \Exception('Le stock n est plus disponible');

     // return;
  //}


       $activity = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getActivity()->setStock($newStock);
      //dd($activity);
     $this->em->persist($activity);

     $this->em->flush();


   }

  // public function newStock() {
         

//}



}