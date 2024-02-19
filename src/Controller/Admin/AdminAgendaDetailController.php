<?php


namespace App\Controller\Admin;

use App\Entity\PurchaseItem;
use App\Service\CheckNumeric;
use App\Service\Formatdate;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Calendar;
use App\Repository\CalendarRepository;
use App\Repository\PurchaseItemRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class AdminAgendaDetailController extends AbstractController
{
    //Afficher tous les clients et quantité pour un calendar-id
    #[Route('admin/agendadetail/{id}', name: 'admin_agenda_detail', methods: ['GET'])]
    public function showusercalendarpurchase( CalendarRepository $calendarRepository, Formatdate $formatdateService , Calendar $calendar, $id,
      Request $request, UserRepository $UserRepository, PurchaseItemRepository $purchaseItemRepository): Response
    {
        // Définissez les variable
        $sommequantitecommande = null;
        $clientTotals = null;
        $userquery = null;
        $userId= null;


        $categoryData = $calendarRepository->getCategoryImageById($id);
        $image = $categoryData['image'] ?? null;


        // Récupérer l'entité Calendar à partir de la base de données
        $calendar = $calendarRepository->find($id);

            // Vérifier si l'entité a été trouvée
            if (!$calendar) {
                throw $this->createNotFoundException('Calendar not found');
            }

            // Obtenez le nom de la classe de l'entité Calendar
            $typeCalendar = (new \ReflectionClass($calendar))->getShortName();


            $categoryData = $calendarRepository->getCategoryImage($id);
    

        
       

        $staffs = $calendar->getStaffs();


        $activitie = $calendar->getCategory()->isActivity();
         //dd($activitie);

        $calendar = $calendarRepository->find($id);
       // dd($calendar);

       if (!$calendar) {
           throw new NotFoundHttpException('Calendar not found');
       }

        setlocale(LC_TIME, 'fr_FR');


        // Formater les dates
        $formattedStartDate = $formatdateService->formatCustomDate($calendar->getStart());
        $formattedEndDate = $formatdateService->formatCustomDate($calendar->getEnd());

         
        if ($activitie) {

                $fullName = 'john Doe';
                // sinon je récupère la quantité
                $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($id);
                // dd($resultquery);

                //   $sommequantitecommande = $resultquery[0]["SUM(`quantity`)"];
                $sommequantitecommande = $resultquery['quantity'];

                // dd($sommequantitecommande);

                $resutpurchaseitems = $purchaseItemRepository->getPurchaseCalendar($id, $fullName);
            //dd($resutpurchaseitems);
                $userquery = [];
                foreach ($resutpurchaseitems as $purchaseitem) {
                    $userquery[] = [
                        "purchase_id" => $purchaseitem->getPurchase()->getId(),
                        "full_name" => $purchaseitem->getPurchase()->getUser()->getFullName(),
                        "user_Id" =>  $purchaseitem->getPurchase()->getUser()->getId(),
                        "quantity" => $purchaseitem->getQuantity()

                    ];
                }

                $clientTotals = [];
                foreach ($userquery as $item) {
                    $clientName = $item['full_name'];
                    $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
                    $purchaseId = $item['purchase_id'];
                    $userId = $item['user_Id'];

                    if (isset($clientTotals[$clientName])) {
                        $clientTotals[$clientName]['totalQuantity'] += $quantity;
                    } else {
                        $clientTotals[$clientName] = [
                            'totalQuantity' => $quantity,
                            'purchaseId' => $purchaseId,
                            'userId' => $userId
                        ];
                    }
                //   $stock = $calendarRepository->getStock($id);
                //  $quantityMax = $quantity + $stock;
                //  dd($quantityMax);
                }


         } else {

             $sommequantitecommande = null;
            $clientTotals = null;
            $userId = null;


         }


        //dd($activitie);
        return $this->render('admin/admin_agenda/detail.html.twig', [
            'calendar' => $calendar,
            'formattedStartDate' => $formattedStartDate,
            'formattedEndDate' => $formattedEndDate,
            'sommequantitecommande' => $sommequantitecommande,
            'clientTotals' => $clientTotals,
            'id' => $id,
            'activitie' => $activitie,
            'staffs' => $staffs,
            'userId' => $userId,
            'image' => $image,
          
          //  'price' => $price
        ]);


    }

      //pour afficher liste des inscrits à imprimer
      #[Route('admin/agendalisttoprint/{id}', name: 'admin_agenda_list_print', methods: ['GET'])]
      public function calendarshowlistuserpurchase(CalendarRepository $calendarRepository,  Calendar $calendar, $id, Request $request, UserRepository $UserRepository, PurchaseItemRepository $purchaseItemRepository): Response
      {
          $fullName = 'john Doe';
          // sinon je récupère la quantité
          $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($id);
          // dd($resultquery);
          $sommequantitecommande = $resultquery['quantity'];
  
          $resutpurchaseitems = $purchaseItemRepository->getPurchaseCalendar($id);
          //dd($resutpurchaseitems);
          $userquery = [];
            foreach ($resutpurchaseitems as $purchaseitem) {
                $userquery[] = [
                    "purchase_id" => $purchaseitem->getPurchase()->getId(),
                    "full_name" => $purchaseitem->getPurchase()->getUser()->getFullName(),
                    "quantity" => $purchaseitem->getQuantity()
                ];
            }
  
          $clientTotals = [];
            foreach ($userquery as $item) {
                $clientName = $item['full_name'];
                $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
                $purchaseId = $item['purchase_id'];
    
                if (isset($clientTotals[$clientName])) {
                    $clientTotals[$clientName]['totalQuantity'] += $quantity;
                } else {
                    $clientTotals[$clientName] = [
                        'totalQuantity' => $quantity,
                        'purchaseId' => $purchaseId
                    ];
                }
            }

          $clientTotals = [];
            foreach ($userquery as $item) {
                $clientName = $item['full_name'];
                $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
                $purchaseId = $item['purchase_id'];
    
                if (isset($clientTotals[$clientName])) {
                    $clientTotals[$clientName]['totalQuantity'] += $quantity;
                } else {
                    $clientTotals[$clientName] = [
                        'totalQuantity' => $quantity,
                        'purchaseId' => $purchaseId
                    ];
                }
            }

          return $this->render('admin/admin_agenda/listtoprint.html.twig', [
              'calendar' => $calendar,
              'sommequantitecommande' => $sommequantitecommande,
              'clientTotals' => $clientTotals,
              'id' => $id,
              'userquery' => $userquery,
              // 'purchase_id' => $purchase_id
          ]);
  
  
      }
}