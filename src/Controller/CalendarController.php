<?php

namespace App\Controller;

use \DateTime;
use App\Entity\User;
use App\Entity\Calendar;
use App\Entity\Category;
use App\Form\CalendarType;
use App\Service\Formatdate;
use App\Repository\CalendarRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CalendarController extends AbstractController
{
    #[Route('/calendarfilter', name: 'app_calendar_filter')]
    public function index(CalendarRepository $calendarRepository, CategoryRepository $categoryRepository , Formatdate $formatdateService): Response
    {
          $calendars = $calendarRepository->getAllCalendarActivitie();
          
         

        setlocale(LC_TIME, 'fr_FR');

        // Formate les dates avec le service Formatdate
        foreach ($calendars as $calendar) {
            $calendar->formattedStartDate = $formatdateService->formatCustomDate($calendar->getStart());
            $calendar->formattedEndDate = $formatdateService->formatCustomDate($calendar->getEnd());
        }

        $categories = $categoryRepository->findAll();


        return $this->render('calendarFilter/index.html.twig', [
            'calendars' => $calendars,
            'categories' => $categories,
    
        ]);
    }


    #[Route('/filter', name: 'filter', methods: ['GET', 'POST'], priority: 2)]
    public function filterPrice(CalendarRepository $calendarRepository, CategoryRepository $categoryRepository, Formatdate $formatdateService, Request $request): JsonResponse
    {
        // Récupérer toutes les catégories disponibles
        $categories = $categoryRepository->findAll();
    
        // Récupérer les paramètres de filtre depuis la requête
        $filter = $request->get("filter");
        $min = $request->get("min");
        $begin = $request->get("begin");
        $end = $request->get("end");
        $id = $request->get("id");
        $category = $request->get("category");
    
        // Filtrer les séances du calendrier en fonction des paramètres
        $calendars = $calendarRepository->filter($filter, $min, $begin, $end,$id, $category);
    
        // Formater les dates des séances avec le service Formatdate
        foreach ($calendars as &$calendarData) {
            $formattedStartDate = $formatdateService->formatCustomDate($calendarData['start']);
            $formattedEndDate = $formatdateService->formatCustomDate($calendarData['end']);
    
            // Ajouter les dates formatées au tableau de données
            $calendarData['formattedStartDate'] = $formattedStartDate;
            $calendarData['formattedEndDate'] = $formattedEndDate;
        
    
           // Ajouter l'URL pour la séance en utilisant son ID
            $calendarData['url'] = $this->generateUrl('app_activitie_show', ['id' => $calendarData['id']]);
          // dd($calendarData['url']);

      

        }

        // Renvoyer les résultats de la recherche au format JSON
        return new JsonResponse([
            'calendars' => $calendars,
            'categories' => $categories
        ]);
    }
    


}