<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CalendarRepository;
use App\Repository\CategoryRepository;
use App\Repository\PurchaseItemRepository;

class AgendaCharController extends AbstractController
{
   
     #[Route('/agendachar', name: 'app_agenda_char')]
     public function listCalendarByChar( CalendarRepository $calendarRepository, CategoryRepository $categoryRepository, PurchaseItemRepository $purchaseItemRepository)
           {   
            $events = $calendarRepository->getAllChar();
          
           //dd($events);
              //on initalise variable au cas où elle n'a pas encore de valeur
              $rdvs[] = [];
     
              foreach ($events as $event) {

           

                $colorSettings = $event->getCategory()->getCategorySetting();
                 //dd($colorSettings);
       
                 if ($colorSettings) {
                    $backGroundColor = $colorSettings->getBackGroundColor();
                    $borderColor = $colorSettings->getBorderColor();
                    $textColor = $colorSettings->getTextColor();
                } else {
                    // Définissez des valeurs par défaut au cas où CategorySetting n'est pas défini pour cette catégorie
                    $backgroundColor = '#d3dce3';
                    $borderColor = '#ffffff';
                    $textColor = '#000000';
                }
                



          
        
                $rdvs[] = [
                    'id' => $event->getId(),
                    'start' => $event->getStart()->format('Y-m-d H:i:s'),
                    'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                    'stock' => $event->getStock(),
                    'title' => $event->getTitle(),
                    'backgroundColor' => $backGroundColor,
                    'borderColor' => $borderColor,
                      'textColor' => $textColor,
                ];
            }
        
        
        

        $data = json_encode($rdvs);
       // dd($data);
         return $this->render(
           'agenda/charAll.html.twig',
               [
                'data' => $data,     
               ]

              );
            }


    }