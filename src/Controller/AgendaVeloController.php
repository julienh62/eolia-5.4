<?php

namespace App\Controller;

use App\Service\EventService;
use App\Repository\ActivityRepository;
use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgendaVeloController extends AbstractController
{
    private $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    #[Route('/agendavelo', name: 'app_agenda_velo')]
    public function AgendaByActivity(CalendarRepository $calendarRepository): Response
    {
        $categoryTitle = 'Vélo';
        $image = $calendarRepository->getCategoryImage($categoryTitle);
        //dd($image);
        $data = $this->eventService->getEventData($categoryTitle);

        return $this->render('agenda/agenda.html.twig', [
          'data' => $data,
          'categoryTitle' => $categoryTitle,
          'image' => $image
          
  
      ]);
    }

}