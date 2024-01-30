<?php


namespace App\Controller;

use App\Service\EventService;
use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaByCategoryController extends AbstractController
{
    private $eventService;
    private $calendarRepository;

    public function __construct(EventService $eventService, CalendarRepository $calendarRepository)
    {
        $this->eventService = $eventService;
        $this->calendarRepository = $calendarRepository;
    }

    public function renderAgendaByCategory(Request $request, string $categoryTitle): Response
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
