<?php

namespace App\Controller\Admin;

use App\Repository\CalendarRepository;
use App\Repository\PurchaseItemRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class AdminAgendaController extends AbstractController
{
    #[Route('admin/agenda', name: 'app_admin_agenda')]
    public function index(Request $request, CalendarRepository $calendarRepository, PurchaseItemRepository $purchaseItemRepository): Response
    {
        $events = $calendarRepository->findAll();
        $rdvs = [];
        
        foreach ($events as $event) {
            $staffCollection = $event->getStaffs();
            $staffNames = [];
            
            foreach ($staffCollection as $staff) {
                $staffNames[] = $staff->getFullName();
            }
        
            $staffFullName = implode(', ', $staffNames);


            $colorSettings = $event->getCategory()->getCategorySetting();
            //dd($colorSettings);
  
            if ($colorSettings) {
               $backGroundColor = $colorSettings->getBackGroundColor();
               $borderColor = $colorSettings->getBorderColor();
               $textColor = $colorSettings->getTextColor();
           } else {
               // Définissez des valeurs par défaut au cas où CategorySetting n'est pas défini pour cette catégorie
               $backGroundColor = '#d3dce3';
               $borderColor = '#ffffff';
               $textColor = '#000000';
           }
        
            if ($event instanceof \App\Entity\Activity) {
                $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($event->getId());
                //dd($resultquery);
                $quantityCommanded = $resultquery['quantity'];
    

                $rdvs[] = [
                    'id' => $event->getId(),
                    'start' => $event->getStart()->format('Y-m-d H:i:s'),
                    'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                    'stock' => $event->getStock(),
                    'staffs' => $staffFullName,
                    'title' => $event->getTitle(),
                    // Utilisation des couleurs pour Activity (s'il y en a)
                    'backgroundColor' => $backGroundColor,
                    'borderColor' => $borderColor,
                      'textColor' => $textColor,
                      'quantityCommanded' => $quantityCommanded,
                ];
            } elseif ($event instanceof \App\Entity\StaffSchedule) {
                $colorSettings = $event->getCategory()->getCategorySetting();
                $resultquerye=$event->getId();
              

                $rdvs[] = [
                    'id' => $event->getId(),
                    'start' => $event->getStart()->format('Y-m-d H:i:s'),
                    'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                    'staffs' => $staffFullName,
                    'title' => $event->getTitle(),
                    // Utilisation des couleurs pour StaffSchedule
                    'backgroundColor' => $backGroundColor,
                    'borderColor' => $borderColor,
                      'textColor' => $textColor,
                ];
            }
        }

        return $this->render('admin/admin_agenda/index.html.twig', [
            'data' => json_encode($rdvs),
        ]);
    }
}