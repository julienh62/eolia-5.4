<?php

namespace App\Controller;

use App\Service\EventService;
use App\Repository\ActivityRepository;
use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgendaCharKidController extends AbstractController
{
    private $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    #[Route('/agendacharkide', name: 'app_agenda_char_kid')]
    public function AgendaByActivity(CalendarRepository $calendarRepository): Response
    {
        $categoryTitle = 'Char à voile kid';
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