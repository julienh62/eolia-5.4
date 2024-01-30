<?php

namespace App\Controller;

use App\Service\EventService;
use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class AbstractAgendaController extends AbstractController
{
    protected $eventService;

    public function __construct(EventService $eventService, CalendarRepository $calendarRepository)
    {
        $this->eventService = $eventService;
        $this->calendarRepository = $calendarRepository;

    }

    protected function renderAgendaByCategory(string $categoryTitle, ): Response
    {
        $image = $this->calendarRepository->getCategoryImage($categoryTitle);
        $data = $this->eventService->getEventData($categoryTitle);

        return $this->render('agenda/agenda.html.twig', [
            'data' => $data,
            'categoryTitle' => $categoryTitle,
            'image' => $image,
        ]);
    }
}
