<?php

namespace App\Controller\Admin;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class AdminAgendaController extends AbstractController
{
    #[Route('admin/agenda', name: 'app_admin_agenda')]
      public function index(CalendarRepository $calendarRepository): Response
      {

          $backgroundColor = null;
          $borderColor = null;
          $textColor = null;
          $staff = null;

          $events = $calendarRepository->findAll();
          // dd($events);

         

          //on initalise variable au cas où elle n'a pas encore de valeur
          $rdvs[] = [];

  
          foreach ($events as $event) {
            $staffCollection = $event->getStaffs();
            $staffNames = [];
            
            foreach ($staffCollection as $staff) {
                $staffNames[] = $staff->getFullName();
            }
        
            $staffFullName = implode(', ', $staffNames);
        
            if ($event instanceof \App\Entity\Activitie) {
                $activitieSettings = $event->getActivitieSettings();
                
                if ($activitieSettings !== null) {
                    $rdvs[] = [
                        'start' => $event->getStart()->format('Y-m-d H:i:s'),
                        'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                        'stock' => $event->getStock(),
                        'staffs' => $staffFullName,
                        'title' => $event->getTitle(),
                        'backgroundColor' => $activitieSettings->getBackGroundColor(),
                        'borderColor' => $activitieSettings->getBorderColor(),
                        'textColor' => $activitieSettings->getTextColor(),
                    ];
                } else {
                    // Handle the case where ActivitieSettings is null
                    // Set default values or manage it accordingly
                    $backgroundColor = '#d3dce3';
                    $borderColor = '#ffffff';
                    $textColor = '#000000';
            
                    $rdvs[] = [
                        'start' => $event->getStart()->format('Y-m-d H:i:s'),
                        'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                        'stock' => $event->getStock(),
                        'staffs' => $staffFullName,
                        'title' => $event->getTitle(),
                        'backgroundColor' => $backgroundColor,
                        'borderColor' => $borderColor,
                        'textColor' => $textColor,
                    ];
                }
            } elseif ($event instanceof \App\Entity\StaffSchedule) {
                $staffScheduleSettings = $event->getStaffScheduleSettings();
                
                if ($staffScheduleSettings !== null) {
                    $rdvs[] = [
                        'start' => $event->getStart()->format('Y-m-d H:i:s'),
                        'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                        'staffs' => $staffFullName,
                        'title' => $event->getTitle(),
                        'backgroundColor' => $staffScheduleSettings->getBackGroundColor(),
                        'borderColor' => $staffScheduleSettings->getBorderColor(),
                        'textColor' => $staffScheduleSettings->getTextColor(),
                    ];
                } else {
                    // Handle the case where StaffScheduleSettings is null
                    // Set default values or manage it accordingly
                    $backgroundColor = '#d3dce3';
                    $borderColor = '#ffffff';
                    $textColor = '#000000';
            
                    $rdvs[] = [
                        'start' => $event->getStart()->format('Y-m-d H:i:s'),
                        'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                        'staffs' => $staffFullName,
                        'title' => $event->getTitle(),
                        'backgroundColor' => $backgroundColor,
                        'borderColor' => $borderColor,
                        'textColor' => $textColor,
                    ];
                }
            }
        }

          $data = json_encode($rdvs);
          // dd($data);
          return $this->render('admin/admin_agenda/index.html.twig', [
              'data' => json_encode($rdvs),  // Incluez les données existantes
          ]);
      }
    }