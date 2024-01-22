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

    #[Route('/filter', name: 'filter', methods: ['GET'], priority: 2)]
  public function filterPrice( CalendarRepository $calendarRepository,CategoryRepository $categoryRepository, Formatdate $formatdateService, Request $request ): Response
  {
      $categories = $categoryRepository->findAll();

      $filter = $request->get("filter");
      $min = $request->get("min");
      $begin = $request->get("begin");
      $end = $request->get("end");
      $category = $request->get("category");
      //   $max = $request->get("max");
      //dd($category);

    //  $calendars = $calendarRepository->filter($filter, $min, $begin, $category, $end);
      $calendars = $calendarRepository->filter($filter, $min, $begin, $end, $category);
//dd($calendars);
      setlocale(LC_TIME, 'fr_FR');

// Formate les dates avec le service Formatdate
foreach ($calendars as &$calendarData) {
    $formattedStartDate = $formatdateService->formatCustomDate($calendarData['start']);
    $formattedEndDate = $formatdateService->formatCustomDate($calendarData['end']);
   


    // Add formatted dates to the data array
    $calendarData['formattedStartDate'] = $formattedStartDate;
    $calendarData['formattedEndDate'] = $formattedEndDate;
     // Access the category data and add it to the array
 
}
           // dd($calendars);
      return $this->render('calendarFilter/index.html.twig', [
          'calendars' => $calendars,
          'categories' => $categories,
         // 'category' => $category
      ]);
  }
}