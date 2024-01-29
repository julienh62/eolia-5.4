<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\EventService;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CalendarRepository;
use App\Repository\CategoryRepository;
use App\Repository\PurchaseItemRepository;

class AgendaCataController extends AbstractController
{
  private $eventService;

  public function __construct(EventService $eventService)
  {
      $this->eventService = $eventService;
  }
 
    #[Route('/agendacata', name: 'app_agenda_cata')]
    public function AgendaByActivity(CalendarRepository $calendarRepository): Response
    {
        $categoryTitle = 'Catamaran';
        $image = $calendarRepository->getCategoryImage($categoryTitle);
        $data = $this->eventService->getEventData($categoryTitle);

        return $this->render('agenda/agenda.html.twig', [
          'data' => $data,
          'categoryTitle' => $categoryTitle,
          'image' => $image
          
  
      ]);
    }
  }