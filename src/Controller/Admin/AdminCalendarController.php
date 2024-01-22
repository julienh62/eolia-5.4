<?php

namespace App\Controller\Admin;

use App\Entity\Calendar;
use App\Entity\Activity;
use App\Form\CalendarType;
use App\Service\Formatdate;
use App\Entity\StaffSchedule;
use App\Repository\CalendarRepository;
use App\Repository\ActivityRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\StaffScheduleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminCalendarController extends AbstractController
{

    #[Route('/calendar', name: 'app_admin_calendar_index', methods: ['GET'])]
    public function index(CalendarRepository $calendarRepository, ActivityRepository $activityRepository,
      Formatdate $formatdateService , StaffScheduleRepository $staffScheduleRepository): Response
    {
        $calendars = $calendarRepository->findAll();
     //   $activities = $activityRepository->findAll();
     //   $staffSchedules = $staffScheduleRepository->findAll();

        setlocale(LC_TIME, 'fr_FR');

   
        // Formate les dates avec le service Formatdate
        foreach ($calendars as $calendar) {
            $calendar->formattedStartDate = $formatdateService->formatCustomDate($calendar->getStart());
            $calendar->formattedEndDate = $formatdateService->formatCustomDate($calendar->getEnd());
        }

        return $this->render('admin/admin_calendar/index.html.twig', [
          //  'staffSchedules' => $staffSchedules,
            //'activities' => $activities,
                'calendars' => $calendars
        ]);
    }

    #[Route('admin/createCalendarChoose', name: 'app_admin_formChooseCalendar')]
    public function chooseLocationForm(Request $request): Response
    {
        $clickedDate = $request->cookies->get('clickedDate');
      
        // dd($clickedDate);
        
        return $this->render('admin/admin_calendar/chooseCalendar.html.twig', [
            'clickedDate' => $clickedDate]);
    }



    #[Route('/admin/calendar/new/{typeCalendar}', name: 'app_admin_calendar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, string $typeCalendar): Response
    {
     
        $calendar = new ("App\\Entity\\" . $typeCalendar)();
     
       $clickedDate = $request->query->get('clickedDate');
    
        //dd($clickedDate);
        $form = $this->createForm(
            "App\\Form\\" . $typeCalendar . "Type",
            $calendar,
            ['clickedDate' => $clickedDate] // Passer la valeur comme option
        );
            $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($calendar);
                $entityManager->flush();


                            // Supprimer le cookie 'clickedDate'
            $response = new RedirectResponse($this->generateUrl('app_admin_agenda'));
            $response->headers->clearCookie('clickedDate');

            return $response;
    }

             //   return $this->redirectToRoute('app_admin_calendar_index', [], Response::HTTP_SEE_OTHER);
          //  }
                // dd($form);
            return $this->render('admin/admin_calendar/new.html.twig', [
                'calendar' => $calendar,
                'form' => $form->createView(),
            ]);
        }


    #[Route('/calendar/{id}', name: 'app_admin_calendar_show', methods: ['GET'])]
    public function show(Calendar $calendar): Response
    {
        return $this->render('admin/admin_calendar/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    #[Route('/calendar/{id}/edit', name: 'app_admin_calendar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Calendar $calendar, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_calendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/admin_calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' =>  $form->createView(),
        ]);
    }

    #[Route('calendardelete/{id}', name: 'app_admin_calendar_delete', methods: ['POST'])]
    public function delete(Request $request, Calendar $calendar, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_calendar_index', [], Response::HTTP_SEE_OTHER);
    }
}
