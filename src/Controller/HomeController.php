<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CalendarRepository $calendarRepository)
    {
        $calendars = $calendarRepository->findBy([], [], 3);

        return $this->render('home/index.html.twig', [
            'calendars' => $calendars
        ]);
    }

    #[Route('/presentation', name: 'app_presentation')]
    public function presentation()
    {

        return $this->render('home/presentation.html.twig', [
         
        ]);
    }
}
