<?php

namespace App\EventDispatcher;

use App\Entity\User;
use App\Entity\Purchase;
use App\Repository\PurchaseRepository;
use App\Event\PurchaseSuccessEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Core\Security;


class PurchaseSuccessEmailSubscriber implements EventSubscriberInterface
{
  protected $logger;
  protected $mailer;
  protected $security;
  protected $purchaseRepository;


   public function __construct(LoggerInterface $logger, MailerInterface $mailer, Security $security, PurchaseRepository $purchaseRepository)
  {
     $this->logger = $logger;
     $this->mailer = $mailer;
     $this->security = $security;
    $this->purchaseRepository = $purchaseRepository;
   }
   public static function getSubscribedEvents() :array
    {
      //je dis au dispatcher ; à tout moment si tu reçois 
      //l'évnmnt purchase.success alors tu appelles  sendSuccessEmail
       return [
         'purchase.success' => 'sendSuccessEmail'
       ];
    }
   public function sendSuccessEmail(PurchaseSuccessEvent $purchaseSuccessEvent)
   {
 //dd($purchaseSuccessEvent);


      // récupérer l'utilisateur en ligne
      // rappel je ne suis pas dans un controller avec l'abstractcontroller
      // j'ai donc besoin d'utiliser un service , Security
      /** @var User */
      $currentUser = $this->security->getUser();
     // dd($currentUser);


      // recuperer la commande  
      $purchase = $purchaseSuccessEvent->getPurchase();
     
     // Récupérer les détails de la commande à partir du repository
   //$purchaseDetails = $this->purchaseRepository->findPurchaseDetails($purchase->getId());
       $purchaseDetails = $this->purchaseRepository->findPurchaseDetails($purchase->getId());
     //dd($purchaseDetails);
     // Extraire les informations nécessaires des détails de la commande
    $start = $purchaseDetails[0]['start'];
  //   dd($start);
     $end = $purchaseDetails[0]['end'];
     
    

      // ecrire le mail 
      $email = new TemplatedEmail();
      $email->to(new Address($currentUser->getEmail(), $currentUser->getFullName()))
          ->from("julien@judit.fr")
          ->subject("Votre commande ({$purchase->getId()}) est bien confirmée ")
          ->htmlTemplate('emails/purchase_success.html.twig')
          ->context([
            'purchase' => $purchase,
            'user' => $currentUser,
           'start' => $start,
           'end' => $end
          ]);


      //envoyer l'email
      $this->mailer->send($email);

   //  $this->logger->info("Email envoyé pour la commande n°" .
     // $purchaseSuccessEvent->getPurchase()->getId());

     $this->logger->info("Email envoyé pour la commande n°" . $purchase->getId());

   }
}