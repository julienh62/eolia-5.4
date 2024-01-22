<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CalendarRepository;
use App\Repository\CategoryRepository;
use App\Repository\PurchaseItemRepository;

class AgendaCataController extends AbstractController
{
   
     #[Route('/agendacata', name: 'app_agenda_cata')]
     public function listCalendarByChar( CalendarRepository $calendarRepository, CategoryRepository $categoryRepository, PurchaseItemRepository $purchaseItemRepository)
           {   
            $events = $calendarRepository->getAllCatamaran();
          
           
              //on initalise variable au cas où elle n'a pas encore de valeur
              $rdvs[] = [];
     
          
              foreach($events as $event){
                $ColorSettings = $event->getCategory()->getCategoryColorSettings()->getValues();
                // dd($ColorSettings);
    
                   // Accès aux valeurs de couleur pour chaque événement
                   foreach ($ColorSettings as $colorSetting) {
                   $textColor = $colorSetting->getTextColor();
                    $backgroundColor = $colorSetting->getBackGroundColor();
                    $borderColor = $colorSetting->getBorderColor();
                $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($event->getId());
                $quantityCommanded = $resultquery['quantity'];
    
                   $rdvs[] = [
                       'id' => $event->getId(),
                       'start' => $event->getStart()->format('Y-m-d H:i:s'),
                       'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                       'title' => $event->getTitle(),
                       'stock' => $event->getStock(),
                       'backgroundColor' => $backgroundColor,
                       'borderColor' => $borderColor,
                       'textColor' => $textColor, 
                       'quantityCommanded' => $quantityCommanded,
                   ];
               }
            }

           $data = json_encode($rdvs);
 

          return $this->render(
           'agenda/cataAll.html.twig',
               [
                'data' => $data,     
               ]

              );
            }


    }