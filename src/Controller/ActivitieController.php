<?php

namespace App\Controller;

use \DateTime;
use App\Entity\User;
use App\Entity\Activity;
use App\Form\ActivityType;
use App\Service\Formatdate;
use App\Repository\CategoryRepository;
use App\Repository\ActivityRepository;
use App\Repository\PurchaseItemRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ActivitieController extends AbstractController
{
   #[Route('/activity', name: 'app_activitie_index')]
    public function index(ActivityRepository $activityRepository, Formatdate $formatdateService): Response
    {
          $activities = $activityRepository->findAll();
          
         

        setlocale(LC_TIME, 'fr_FR');

        // Formate les dates avec le service Formatdate
        foreach ($activities as $activity) {
            $activity->formattedStartDate = $formatdateService->formatCustomDate($activity->getStart());
            $activity->formattedEndDate = $formatdateService->formatCustomDate($activity->getEnd());
        }

       
        return $this->render('activity/index.html.twig', [
            'activities' => $activities,
    
        ]);
    }



    #[Route('/activitieshow/{id}', name: 'app_activitie_show', priority: -1, methods: ['GET'])]
    public function show(Activity $activity, PurchaseItemRepository $purchaseItemRepository, ActivityRepository $activityRepository,$id): Response
    {
        
       
       
        $activities = $activityRepository->findAll();

        $stock = $activityRepository->getStockById($id);


    
        $quantity = $purchaseItemRepository->getPurchaseCalendar($id);
        $resultquery = $purchaseItemRepository->getPurchaseQuantitySum($id);
        //dd($quantity);
        
       

        return $this->render('activity/show.html.twig', [
            'activity' => $activity,
         
        ]);
    }

 




}

     